
<?php
class Crud_model extends CI_Model 
{
	
    
	function __construct()
	{
			parent::__construct();
			$this->load->database();
	}


	public function login_model($email, $password)
	{
			$query = $this->db->get_where('members', array('email'=>$email, 'pass'=>$password));
			return $query->row_array();
	}




	public function save_member($data)
	{

		
        $res=$this->db->insert('members',$data);
        return $res;
	}


	

	public function save_payment($data)
	{

		
        $res=$this->db->insert('all_payments',$data);
        return $res;
	}

	
}

?>