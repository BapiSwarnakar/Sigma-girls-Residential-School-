<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mzs_site_controller extends CI_Controller {

	public function __construct()
	{
	parent::__construct();
	$this->load->database();
	$this->load->helper('url');


	date_default_timezone_set('Asia/Kolkata');
    $this->thatdate = date('Y-m-d h:i:s a');
	}
	
	public function index()
	{
		$this->load->view('include/header');
		$this->load->view('home');
		$this->load->view('include/footer');
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
	{
		$this->load->view('include/header');
		$this->load->view('login');
		$this->load->view('include/footer');
	}

    public function donate()
	{
		$this->load->view('include/header');
		$this->load->view('member');
		$this->load->view('include/footer');
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

    

   public function check_login()
   {   
	
	   if(isset($_POST['submit']))
		{


	        $e=$this->input->post('email');
			$p=$this->input->post('pass');

		    $this->load->model('Crud_model');
		    $f=$this->Crud_model->login_model($e,$p);

		    if($f==true)
		               {
		    	$this->load->view('include/header');
		        $this->load->view('user_dashboard'); 
		        $this->load->view('include/footer');
		                }

		}
		   		


    }





   function dashboard()
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

		
		/*load registration view form*/
		// $this->load->view('registration');
	
		// /*Check submit button */
		// if($this->input->post('registration'))
		// {
		//     $data['name']=$this->input->post('name');
		// 	$data['pass']=$this->input->post('password');
		// 	$data['email']=$this->input->post('email');
		// 	$response=$this->Crud_model->saverecords($data);
		// 	if($response==true)
		// 	{
		// 	        echo "Records Saved Successfully";
		// 	}
		// 	else{
		// 			echo "Insert error !";
		// 	     }
		// }
	}


}
