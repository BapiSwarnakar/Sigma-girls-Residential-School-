<style>
   body{
   	background-color: #06213F;
   }
    .error{
      color: red;
        font-style: italic;
    }
    
  </style>
  <style>
    .error{
      color: red;
        font-style: italic;
    }
    #logo{
    	width: 300px;
    }
    @media (max-width: 768px){
    	#logo{
    	  width: 80px;
       }
       
    }
    
    input[type="text"],select{
        text-transform:uppercase;
    }
  </style>
<body >
	<div class="container mt-4 col-md-9">
		<div class="col-md-12 col-12"  style="background-color: #06213F;">
	        <img src="<?php echo base_url() ?>/assets/images/sigma-1.png" id="logo">
	               		
	     </div>
		<div class="card mt-3">
			<div class="card-header">
               <div class="row">
	               
	               	<div class="col-md-12 col-12">
	               		<h2 class="card-title text-uppercase text-center">
					SIGMA MISSION (H.S.)
						</h2>
	               	</div>
	               	<div class="col-md-12 col-12 mt-2">
	               		
						<p class="text-center text-uppercase" style="font-size: 12px;">An Ideal Residential Institute (XI-XII Science)<br><b>(ONLY FOR GIRLS)</b><br>Sahabajpur, Kaliachak, Malda (W.B.) Pin - 732201<br>Contact : 9734796523 / 9614780385</p>
						<p class="text-center text-uppercase" style="border: 2px solid black;"><b>APPLICATION FORM FOR ADMISSION - 202 ....... 202 ........</b></p>
						<p class="text-center text-uppercase" style="font-size: 12px;"><b>[ ALL COLUMNS ARE TO BE FILLED IN BLOCK LETTERS ]</b></p>
	               	</div>
               </div>
				
			</div>
			<div class="card-body">
				<span id="success-message"></span>
				<form class="row g-3" id="registration">
				  <div class="col-md-12 p-1 border">
                  	<h6 class="">Personal Details :</h6>
                  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="name" name="name" required />
				      <label for="name" class="form-label">Full Name</label>
				      
				    </div>
				    
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="father" name="father" required/>
				      <label for="father" class="form-label">Father’s Name</label>
				     
				    </div>
				     
				  </div>



				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="father_occupation" name="father_occupation" />
				      <label for="father_occupation" class="form-label">Father Occupation</label>
				     
				    </div>
				     
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="father_qualification" name="father_qualification" />
				      <label for="father_qualification" class="form-label">Father Qualification</label>
				     
				    </div>
				     
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="father_income" name="father_income" />
				      <label for="father_income" class="form-label">Father Annual Income</label>
				     
				    </div>
				     
				  </div>



				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="number" class="form-control" required id="mobile1" name="mobile1" />
				      <label for="mobile1" class="form-label">Contact No</label>
				     
				    </div>
				    
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" id="mother" required name="mother" />
				      <label for="mother" class="form-label">Mother's Name</label>
				      
				    </div>
				    
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="mother_occupation" name="mother_occupation" />
				      <label for="mother_occupation" class="form-label">Mother Occupation</label>
				     
				    </div>
				    
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="mother_qualification" name="mother_qualification" />
				      <label for="mother_qualification" class="form-label">Mother Qualification</label>
				     
				    </div>
				     
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="mother_income" name="mother_income" />
				      <label for="mother_income" class="form-label">Mother Annual Income</label>
				     
				    </div>
				    
				  </div>

				  <!-- ADDRESS DETAILS -->
                  <div class="col-md-12 p-1 border">
                  	<h6 class="">Address Details :</h6>
                  </div>
                  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="village" name="village"  />
				      <label for="village" class="form-label">Village</label>
				      
				    </div>
				   
				  </div>
                  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="post_office" name="post_office"  />
				      <label for="post_office" class="form-label">Post Office</label>
				      
				    </div>
				   
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="police_station" name="police_station"  />
				      <label for="police_station" class="form-label">Police Station</label>
				      
				    </div>
				   
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="district" name="district"  />
				      <label for="district" class="form-label">District</label>
				      
				    </div>
				   
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="pincode" name="pincode"  />
				      <label for="pincode" class="form-label">Pin Code</label>
				      
				    </div>
				    
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="number" class="form-control" required id="mobile2" name="mobile2"  />
				      <label for="mobile2" class="form-label">Mobile No</label>
				      
				    </div>
				    
				  </div>




				  <!-- OTHERS DETAILS -->
                  <div class="col-md-12 p-1 border">
                  	<h6 class="">Others Details :</h6>
                  </div>

                  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="date" class="form-control" required id="dob" name="dob"  />
				      <label for="dob" class="form-label">Date of Birth</label>
				      
				    </div>
				    
				  </div>

				  <div class="col-md-4">
				        <select class="select select-initialized form-control text-capitalize" name="gender" required>
				          <option value="">Select Gender</option>
				          <option value="Male">Male</option>
				          <option value="Female">Female</option>
				         
				        </select>
				        
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control"  required id="nationality" name="nationality"  />
				      <label for="nationality" class="form-label">Nationality</label>
				      
				    </div>
				    
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="religion" name="religion"  />
				      <label for="religion" class="form-label">Religion</label>
				      
				    </div>
				   
				  </div>
				   <div class="col-md-4">
				        <select class="select select-initialized form-control text-capitalize" name="cast" required>
				          <option value="">Select Cast</option>
				          <option value="General">General</option>
				          <option value="ST">ST</option>
				          <option value="SC">SC</option>
				          <option value="OBC-A">OBC-A</option>
				          <option value="OBC-B">OBC-B</option>
				        </select>
				        
				  </div>
				  <div class="col-md-4">
				        <select class="select select-initialized  form-control text-capitalize" required name="handicapped">
				          <option value="">Whether physically handicapped</option>
				          <option value="No">No</option>
				          <option value="Yes">Yes</option>
				         
				        </select>
				        <div class="error-handicapped text-danger"></div>
				  </div>
				   <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="guardian" name="guardian"  />
				      <label for="guardian" class="form-label">Guardian Name</label>
				      
				    </div>
				  
				  </div>
				  <div class="col-md-8">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="address" name="address"  />
				      <label for="address" class="form-label">Address</label>
				      
				    </div>
				   
				  </div>
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="relation" name="relation"  />
				      <label for="relation" class="form-label">Relationship with the student</label>
				      
				    </div>
				    
				  </div>
				  <div class="col-md-8">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="school" name="school" />
				      <label for="school" class="form-label">Name and address of the previous school </label>
				      
				    </div>
				    
				  </div>
				  
				  <div class="col-md-4">
				    <div class="form-outline">
				      <input type="text" class="form-control" required id="addmission" name="addmission"  />
				      <label for="addmission" class="form-label">Seeking admission for class</label>
				      
				    </div>
				    
				  </div>
				  <div class="col-md-4">
				    <div class="form-group">
				      <input type="file" class="form-control" required id="photo" name="photo"  />
				      <label for="addmission" class="form-label text-danger">Note: Upload photo less than 120 KB .</label>
				      <div class="d-none" id="photo_gif">
				        <img src="<?= base_url("assets/img/success.gif") ?>" width="50">
				        <label>Upload Success </label>
				        
				      </div>
				    </div>
			
				  </div>
				  <div class="col-md-4">
				    <div class="form-group">
				      <input type="file" class="form-control"  required id="sig" name="sig"  />
				      <label for="addmission" class="form-label text-danger">Note: Upload signature less than 50 KB .</label>
				      <div class="d-none" id="sig_gif">
				        <img src="<?= base_url("assets/img/success.gif") ?>" width="50">
				        <label>Upload Success </label><br>
				        
				      </div>
				    </div>
				   
				  </div>
				  <div class="col-12 col-md-12 d-none" id="show_div">
				  	 <div class="row justify-content-md-center">
				  	 	
				  	 	<div class="col-md-4 border offset-md-4">
				  	 		<img src="" id="pic" width="60" alt="Upload Photo">
				  	 	</div>
				  	 	<div class="col-md-4 border" style="display: inherit;">
				  	 		<img src="" id="sin" width="150" alt="Upload Signature">
				  	 	</div>
				  	 </div>
				  </div>
				  <div class="col-12">
				  	<p><input type="checkbox" id="check" required> <label for="check">&nbsp;The information given above is TRUE to the best of my knowledge.</label></p>
				  </div>
				  
				  <div class="col-12">
				  	
				    <button class="btn btn-primary" type="submit" id="submit">Submit form</button>
				  </div>
				</form>
			</div>
			<div class="card-footer bg-warning">
				
			</div>
		</div>
	</div>
</body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php
require_once("script/image_validation.php");
?>
<script type="text/javascript">
	
	$(document).ready(function(){
	 
	 $('#registration').parsley();
	 $('#registration').on('submit',function(event){
       
       if($('#registration').parsley().validate())
        {
		 	event.preventDefault();
	        $.ajax({
				url:"<?= site_url("User/validation") ?>",
				method : "post",
				enctype : "multipart/form-data",
	            data: new FormData(this),
				dataType : "json",
				contentType: false,
	            cache: false,
	            processData:false, 
				beforeSend : function()
				{
					$('#submit').attr('disabled',true);
					$('#submit').html('Please wait..');
				},
				success : function(data){
					if(data.error)
					{
					 swal(data.title,data.message,data.status);
					 
					}

					if(data.success)
					{
					  
	                  $('#registration')[0].reset();
	                    
	                  swal({
	                  	  title: data.title,
						  text: data.message,
						  icon: data.status,
						  button: "Print",
	                   })
						.then((value) => {
						  location.href='<?= site_url("User/print") ?>';
						});
					 }
					$('#submit').attr('disabled',false);
					$('#submit').html('Submit form');

				}
			});

        }



	 });	
		
	        
});
</script>




<!-- <script type="text/javascript">
	// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict';

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation');

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach((form) => {
    form.addEventListener('submit', (event) => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script> -->