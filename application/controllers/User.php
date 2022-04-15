<?php
 class User extends CI_Controller
 {
 	public function index()
	{
		//$this->load->helper("html");
		$this->load->view('user/header');
		$this->load->view('user/index');
		$this->load->view('user/footer');
		//echo "Testing..";
	}

	public function validation()
	{
		//$this->form_validation->set_error_delimiters('<div class="text-danger">','</div>');
		if($this->form_validation->run('validate_form'))
		{
			$this->load->library('upload');
			$post = $this->input->post();
			$post['flag']='1';
			
			$post['reg_id']="SGM".substr(rand(0000000000,9999999999),6);
			
			// Image Upload
			$photo_data = array();
			$sig_data = array();
			$unicName = strtotime("now");
			
			$photo = $unicName."_".$_FILES['photo']['name'];
			$sig   = $unicName."_".$_FILES['sig']['name'];
			
			$config = array(
				'upload_path' => "./uploade/",
				'allowed_types' => "gif|jpg|png|jpeg",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				// 'max_height' => "768",
				// 'max_width' => "1024",
				'file_name' =>$photo
				);
			$this->upload->initialize($config);
			if(! $this->upload->do_upload('photo'))
			{
				$array = array(
					'error'=>true,
					'message'=>$this->upload->display_errors()
				);

			}
			else{
				$photo_data = $this->upload->data();

				$config1 = array(
					'upload_path' => "./uploade/",
					'allowed_types' => "gif|jpg|png|jpeg",
					'overwrite' => TRUE,
					'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
					// 'max_height' => "768",
					// 'max_width' => "1024",
					'file_name' =>$sig
					);
				$this->upload->initialize($config1);
				if(! $this->upload->do_upload('sig'))
				{
					$array = array(
						'error'=>true,
						'message'=>'Not Upload Signature '
					);
				}
				else{
						$sig_data = $this->upload->data();
						$post['photo'] = $photo_data['file_name'];
				        $post['signature']=$sig_data['file_name'];
						// Image Upload Exit
						$this->load->model('User_Model');
						if($last_id = $this->User_Model->Register_Form($post))
						{
						$this->session->set_userdata('id',$last_id);
						$array = array(
							'success'   => true,
							'message' => 'Your Application Saved Successfully',
							'title'=>'Application Id : '.$post['reg_id'],
							'status'=>'success'
						);
						// return redirect('admin/Welcome');
					}
					else
					{
						$array = array(
							'error'   => true,
							'message' => 'Technical issue, Please try again !',
							'title'=>'Thankyou',
							'status'=>'success'
						);
					
					}
				}
			}

			 

		}
		else
		{
		   $array = array(
		    'error'   => true,
		    'title'=>'Wrong',
		    'message'=>'Illegal Form Submit Details, All Details is Required !',
		    'status'=>'error'
		   );
		}
	 echo json_encode($array);
	}


	public function photo_check($str){
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/jpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['photo']['name']);
        if(isset($_FILES['photo']['name']) && $_FILES['photo']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                // $this->form_validation->set_message('photo_check', 'Please select only gif/jpg/png file.');
                $array = array(
							'error'   => true,
							'message' => 'Please select only gif/jpg/png file.',
							'title'=>'Thankyou',
							'status'=>'success'
						);
                
				return false;
            }
        }else{

            // $this->form_validation->set_message('photo_check', 'Please choose a <b>Photo</b> to upload.');
            $array = array(
							'error'   => true,
							'message' => 'Please choose a <b>Photo</b> to upload.',
							'title'=>'Thankyou',
							'status'=>'success'
						);
                
		   return false;
        }
     echo json_encode($array);
    }

	public function sig_check($str){
        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/jpeg','image/png','image/x-png');
        $mime = get_mime_by_extension($_FILES['sig']['name']);
        if(isset($_FILES['sig']['name']) && $_FILES['sig']['name']!=""){
            if(in_array($mime, $allowed_mime_type_arr)){
                return true;
            }else{
                // $this->form_validation->set_message('sig_check', 'Please select only gif/jpg/png file.');
                $array = array(
							'error'   => true,
							'message' => 'Please select only gif/jpg/png file.',
							'title'=>'Thankyou',
							'status'=>'success'
						);
                
				return false;
            }
        }else{
            // $this->form_validation->set_message('sig_check', 'Please choose a <b>Signature</b> to upload.');
            $array = array(
							'error'   => true,
							'message' => 'Please choose a <b>Signature</b> to upload.',
							'title'=>'Thankyou',
							'status'=>'success'
						);
                
		   return false;
        }
     echo json_encode($array);
    }


	public function print()
	{
      $id = $this->session->userdata('id');
      $this->load->model('User_Model');
	  $result = $this->User_Model->Fetch_Application_Details($id);
	  $this->load->view('user/header');
	  $this->load->view("user/print_application",['data'=>$result]);  
	  $this->load->view('user/footer');  
	}
	






// End Class

 }
  
?>