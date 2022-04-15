<?php
if(isset($data))
{
   $name = strtoupper($data->name);
   $father = strtoupper($data->father);
   $mother = strtoupper($data->mother);
   $guardian = strtoupper($data->guardian);
   $dob = strtoupper($data->dob);
   $school = strtoupper($data->school);
   $nationality = strtoupper($data->nationality);
   $cast =strtoupper($data->cast);
   // $aadhar = $data->aadhar;
   $mobile1 = strtoupper($data->mobile1);
   $mobile2 = strtoupper($data->mobile2);
   $address = strtoupper($data->address);
   $addmission = strtoupper($data->addmission);
   $photo = strtoupper($data->photo);
   $sig = strtoupper($data->signature);
   $Reg_Date = strtoupper($data->date);
   $occupation=strtoupper($data->father_occupation);
   $qualification=strtoupper($data->father_qualification);
   $income=strtoupper($data->father_income);
   $villege=strtoupper($data->village);
   $post=strtoupper($data->post_office);
   $ps=strtoupper($data->police_station);
   $district=strtoupper($data->district);
   $pin=strtoupper($data->pincode);
   $gender=strtoupper($data->gender);
   $religion=strtoupper($data->religion);
   $handicapped=strtoupper($data->handicapped);
   $relation=strtoupper($data->relation);
   $addmission=strtoupper($data->addmission);
   $reg_id=$data->reg_id;
   
}
?>
<style type="text/css">
	table tr th{
		border: none;
	}
</style>
<style>
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
    	width: 120px;
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
  <style type="text/css">
  	.text{
  		font-size: 15px;
  	}
  </style>
<body>
	<div class="container mt-4 col-md-9">
		<div class="card">
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
				<div class="col-md-12">

<table>
  <thead>
    <tr>
      <th scope="" colspan="5"><h5><b>Application Id : <?php echo $reg_id; ?></b></p></h5>

     <!--  <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th> -->
    </tr>
  </thead>
  <tbody>
    <tr class="">
      <th scope="row" class="text" colspan="2">Full Name</th>
 
      <td class="text col-md-5" colspan="3"> <span>: </span><?php echo $name; ?></td>
    </tr>
    <tr>
      <th scope="row" class="text" colspan="2">Father's Name</th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $father; ?></td>
    </tr>
    <tr>
      <th scope="row" colspan="2" class="text">Occupation</th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $occupation; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2">Qualification</th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $qualification; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2">Annual Income</th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $income; ?></td>
    </tr>
     <tr>
      <th class="text"scope="row" colspan="2">Mother's Name </th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $mother; ?></td>
    </tr>
     <tr>
      <th class="text" colspan="2">Contact Number </th>
      <td class="text col-md-5" colspan="3"> <span>: </span><?php echo $mobile1; ?></td>
    </tr>
    <tr>
      <th class="text"  scope="col"><h6><b>Address :</b></h6></th>
    </tr>
     <tr >
      <th  class="text" colspan="2" scope="row">Villege</th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $villege; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2">P.O </th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $post; ?></td>
      </tr>
      <tr>
      <th class="text" colspan="2">P.S </th>
      <td class="text col-md-5" colspan="3"> <span>: </span><?php echo $ps; ?></td>
    </tr>   
     <tr>
      <th class="text" colspan="2" scope="row">District </th>
      <td class="text col-md-5" colspan="3">: <?php echo $district; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2">Pin </th>
      <td class="text col-md-5" colspan="3">: <?php echo $pin; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2">Mobile </th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $mobile2; ?></td>
    </tr>
     <tr>
      <th class="text" colspan="2" scope="row">Date Of Birth </th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $dob; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2">Gender </th>
      <td class="text col-md-5" colspan="3"> <span>: </span><?php echo $gender; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2">Nationality </th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $nationality; ?></td>
    </tr>
     <tr>
      <th class="text" colspan="2" scope="row">Religion </th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $religion; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2">Caste </th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $cast; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2">Physically Handicapped </th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $handicapped; ?></td>
    </tr>
     <tr>
      <th class="text" colspan="2" scope="row">Guardian's Name </th>
      <td class="text col-md-5" colspan="3" ><span>: </span><?php echo $guardian; ?></td>
    </tr>
    <tr>
      <th class="text" colspan="2" scope="row">Address </th>
      <td class="text col-md-5" colspan="3" ><span>: </span><?php echo $address ?></td>
    </tr>
     <tr>
      <th class="text" colspan="2" scope="row">Relationship With The Student </th>
      <td class="text col-md-5" colspan="3"><span>: </span><?php echo $relation; ?></td>
    </tr>
     <tr>
      <th class="text" colspan="2" scope="row">Previous School </th>
      <td class="text col-md-5" colspan="3"> <span>: </span><?php echo $school; ?></td>
       <tr>
      <th class="text" scope="row" colspan="2">Seeking Addmition For Class </th>
      <td class="text col-md-5" colspan="3" ><span>: </span><?php echo $addmission; ?></td>
    </tr>
    </tr>
  </tbody>
</table>
<br> <br>
<p class="" colspan="5">The Information Given Above Is TRUE To The Best Of My Knowledge . I <span><b><?php echo $name; ?></b></span> Declare That I Shall Abide By The Rules And Instruction Of The Institution.</p>
<br>

				  </table> 
				  <div class="row" style="margin-top: 8%;">
				  	<div class="col-md-6">
				  		
				  		<p class="text-center" style="border:1px solid lightgray; border-bottom: none;border-left: none;border-right: none; width: 80%;">Sig. of Guardian</p>
				  	</div>
				  	<div class="col-md-6">
						  <div class="d-flex justify-content-center">
						     <img src="<?= base_url("uploade/") ?><?php echo $sig; ?>" height="40px" >
                         </div>
				  		<p class="text-center" style="border-bottom: none;border-left: none;border-right: none;">Sig. of Applicant</p>
				  	</div>
				  </div>
      
      <li>ATTACHED :</li>
<P class="border border-dark p-2" colspan="5">1.Photo Copy Of Admit Card Of MP, 2. Photo Copy Of Marksheet Of MP, 3. School Leaving Certificate (Original), 4. Colour Photo (5 Copy), 5. Photo Copy Of Adhar Card..</P>


				  <div class="row mt-5">
				  	<div class="col-md-12 text-center">
				  		<span>...................................................................................................................................................................................................................</span>
				  	</div>
				  </div>
          <br><br><br><br>
				  <div class="row mt-5">
				  	<div class="col-md-12">
				  		<h6 class="text-center">FOR OFFICE USE ONLY</h6>
              <br>
              <div class="row">
                <span class="col-md-6">Mob : 9614780385</span>

                <span class="text-right col-md-6">Mob : 9734796523</span>
              </div>
              <br>
              <div class="col-md-12 col-12">
                    <h2 class="card-title text-uppercase text-center">SIGMA MISSION (H.S.) </h2>
           <p class="text-center"> Sahabajpur, Kaliyachak, Malda (W.B) Pin- 7332201</p>
           <h4 class="card-title text-uppercase text-center"><b>ADMIT CARD</b></h4>

            <div class="d-flex justify-content-end">
                 <img src="<?= base_url("uploade/") ?><?php echo $photo; ?>" height="120px" >
              <!-- <img src="" height="120px" width="100px" style="border:1px solid black;"/ > -->
            </div>
           <p>Name Of The Student  : <?php echo $name; ?></p>
           <p>Father's / Guardian's Name  : <?php echo $father; ?></p>
           <div class="row">
             <span class="col-md-4">Class : ...........................</span>
             <span class="col-md-4">Date Of Exam : ......../........./..........</span>
             <span class="col-md-4">Time Of The Exam : .....................</span>
           </div>
           <br>
           <p>Center Of Examination : <b>Mission Campus <b></p>
            <br>
            <p class="text-right">Seal & Sign Of Head Of The Institute </p>
                  </div>
				  		
				  	</div>
				  	<!-- <div class="col-md-6 mt-2">
				  		<p>Rs-50/-(fifty) and an application form for the Addmission Test likely to be held on 21/03/2022</p>
				  	</div> -->
				 
				  		<!-- <img src="" height="120px" width="100px" style="border:1px solid black;"/ > -->
				  	<!-- </div> -->
				  	<!-- <div class="col-md-12 mt-3">
				  		From.......................................................................................................S/o............................................................................................
				  	</div> -->
				  	<div class="col-md-6 mt-5">
				  		Date : <?php echo $Reg_Date; ?>
				  	</div>
				  </div>
				   
				</div>
			
			</div>
			<div class="card-footer bg-warning">
				
			</div>
		</div>
	</div>
</body>
<script type="text/javascript">

  print_App();

  function print_App(){

  	window.print();
  }
	
</script>
