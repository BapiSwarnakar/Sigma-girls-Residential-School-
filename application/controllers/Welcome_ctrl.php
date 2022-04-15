<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome_ctrl extends CI_Controller {



    public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');
	date_default_timezone_set('Asia/Kolkata');
    $this->thatdate = date('Y-m-d h:i:s a');
    $this->load->model('Crud_model');
	}
	
	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
	}
     

    public function admission()
	{
		
		$this->load->view('Student_registration');
		
	}


	
	 public function about()
	{
		$this->load->view('include/header');
		$this->load->view('about');
		$this->load->view('include/footer');
	}

    public function gallery()
	{
		$this->load->view('include/header');
		$this->load->view('gallery');
		$this->load->view('include/footer');
	}

    public function members()
	{
		$this->load->view('include/header');
		$this->load->view('members');
		$this->load->view('include/footer');
	}

    public function contact()
	{
		$this->load->view('include/header');
		$this->load->view('contact');
		$this->load->view('include/footer');
	}

    public function activity()
	{
		$this->load->view('include/header');
		$this->load->view('member');
		$this->load->view('include/footer');
	}

    public function login()
	{    $this->load->library('session');

		$this->load->view('include/header');
		$this->load->view('login');
		$this->load->view('include/footer');
	}

    public function payment()
	{
		$this->load->view('include/member_header');
		$this->load->view('payment');
		$this->load->view('include/member_footer');
	}
	
	public function register()
	{
		$this->load->view('include/header');
		$this->load->view('registration');
		$this->load->view('include/footer');
	}

	public function forgot_pass()
	{
		$this->load->view('include/header');
		$this->load->view('forgot_password');
		$this->load->view('include/footer');
	}


//============================================================================================
	public function save_pay()
	{

		if(isset($_POST['submit_pay']))
    
		{
			if($this->session->userdata('user') ==null){
			//$this->load->view('member_home');


		}
		else{
			echo '<script>alert("Login first to submit payment details");</script>';
		}
				
				

				//redirect('login');

			//} //else {
				// code...
			
			

        $this->form_validation->set_rules('pay_date','Payment Date','required|trim');
        $this->form_validation->set_rules('amount','Amount','required|trim');
        $this->form_validation->set_rules('purpose','Payment Purpose','required|trim');
        $this->form_validation->set_rules('method','Payment Method','required|trim');
        $this->form_validation->set_rules('tran_id','Transaction ID','required|trim');
        
        			//}

        if($this->form_validation->run()==true)
        {

         //Generate random numbers between 1 to 50

        


        $data= array(                'from_id'=> $this->input->post('id')  ,     
        	                         'from_name' => $this->input->post('name') ,
                                     'submit_date'=>$this->thatdate, 
        			                  'donate_date' => $this->input->post('pay_date') ,  
        			                  'donate_amt' => $this->input->post('amount') ,
        			                  'purpose' => $this->input->post('purpose') ,
        			                  'pay_mode' => $this->input->post('method') ,  
        			                  'tran_id' => $this->input->post('tran_id') ,
        			                  'tran_dtl' => $this->input->post('tran_dtl') 
        			                  


                    );


        	$this->load->model('Crud_model');
		    $f=$this->Crud_model->save_payment($data);

		    if($f==true)
		               {

		    	$this->load->view('include/member_header');
		        $this->load->view('payment'); 
		        $this->load->view('include/member_footer');
		                }
        	
        	

        }
        else
        {

        	$this->load->view('include/member_header');
		    $this->load->view('payment'); 
		    $this->load->view('include/member_footer');	    
            
        }






		$this->load->view('include/member_header');
		$this->load->view('payment');
		$this->load->view('include/member_footer');
	   }
    }
    
   //==================================================================================================
   public function check_login()
   {  
		if(!empty($_POST["login"]) && !empty($_POST["email"]) && !empty($_POST["password"]))
		 {	
		$email = $_POST["email"];
		$password = $_POST["password"];	
		
		$this->load->model('Crud_model');
		$data = $this->Crud_model->login_model($email, $password);

		if($data){
			$this->session->set_userdata('user', $data);
			//redirect('member_home');
			$this->load->view('include/member_header');
			$this->load->view('member_home');
			$this->load->view('include/member_footer');
		}
		else{
			
			$this->session->set_flashdata('error','Invalid login. User not found');
			//header('location:'.base_url().$this->login());
			$this->load->view('include/header');
			$this->load->view('login');
			$this->load->view('include/footer');
		    } 
		}

		else{
			
			$this->session->set_flashdata('error','Email Id & Password Cannot be blank ');
			//header('location:'.base_url().$this->login());
			$this->load->view('include/header');
			$this->load->view('login');
			$this->load->view('include/footer');
		    } 
    }




    public function member_home(){
		//load session library
		$this->load->library('session');

		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			$this->load->view('member_home');
		}
		else{
			redirect('/');
		}
		
	}



	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('login');
	}





    public function dashboard()
   {
	 $this->load->view('user_dashboard');
   }





    public function insert_member()
	{

		if(isset($_POST['submit']))
    
		{

        $this->form_validation->set_rules('name','Username','required|trim');
        $this->form_validation->set_rules('email','Email','required|trim|is_unique[members.email]');
        $this->form_validation->set_rules('password','Password','required|trim');
        $this->form_validation->set_rules('cpassword','Password Confirmation','required|trim|matches[password]');
        $this->form_validation->set_rules('phoneNumber','Phone','required|trim');
        $this->form_validation->set_rules('batch','Year of Passing','required|trim');
        $this->form_validation->set_rules('dob','Date of Birth','required|trim');
        $this->form_validation->set_rules('guardian','Father or Guardian Name','required|trim');
        $this->form_validation->set_rules('address','Address','required|trim');


        if($this->form_validation->run()==true)
        {

         //Generate random numbers between 1 to 50

        $uid=rand(10001,99999);
        $dataid['id'] = $uid;


        $data= array('id'=>$uid,     'name' => $this->input->post('name') ,
                                     'reg_date'=>$this->thatdate, 
        			                  'email' => $this->input->post('email') ,  
        			                  'pass' => $this->input->post('cpassword') ,
        			                  'phone' => $this->input->post('phoneNumber') ,
        			                  'last_class' => $this->input->post('last_class') ,  
        			                  'passing_year' => $this->input->post('batch') ,
        			                  'dob' => $this->input->post('dob') ,
        			                  'father_name' => $this->input->post('guardian') ,
        			                  'proffession' => $this->input->post('work') ,
        			                  'organisation' => $this->input->post('organization') ,
        			                  'org_location' => $this->input->post('org_location') ,
        			                  'marital_status' => $this->input->post('married_status') ,
        			                  'zip' => $this->input->post('zipcode') ,
        			                  'address' => $this->input->post('address') ,


                    );


        	$this->load->model('Crud_model');
		    $f=$this->Crud_model->save_member($data);

		    if($f==true)
		               {
		    	$this->load->view('include/header');
		        $this->load->view('user_dashboard', $dataid); 
		        $this->load->view('include/footer');
		                }
        	
        	

        }
        else
        {

        	$this->load->view('include/header');
		    $this->load->view('registration'); 
		    $this->load->view('include/footer');	    
            
        }

        }

		
		
	}
}
