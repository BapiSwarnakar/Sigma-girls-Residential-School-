<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


         <meta name="viewport" content="width=device-width, initial-scale=1">
 <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
        <title>Center Registration</title>
        <style>
            body {
                font-family:tahoma;
                font-size:17px;
                background-color: #F0E3FF;
            }
.container{
    margin-top: 20px;
    background-color: #F0E3FF;
}
            #signup-step {
                margin:auto;
                padding:0;
                width:80%
            }

            #signup-step li {
                list-style:none; 
                float:left;
                padding:5px 10px;
                border-top:#004C9C 1px solid;
                border-left:#004C9C 1px solid;
                border-right:#004C9C 1px solid;
                border-radius:5px 5px 0 0;
            }

            .active {
                color:#FFF;
            }

            #signup-step li.active {
                background-color:#004C9C;
            }

            #signup-form {
                clear:both;
                border:1px #004C9C solid;
                padding:20px;
                width:80%;
                margin:auto;
            }

            .demoInputBox {
                padding: 10px;
                border: #CDCDCD 1px solid;
                border-radius: 4px;
                background-color: #FFF;
                width: 50%;
            }

            .signup-error {
                color:#FF0000; 
                padding-left:15px;
            }

            .message {
                color: #00FF00;
                font-weight: bold;
                width: 100%;
                padding: 10;
            }

            .btnAction {
                padding: 5px 10px;
                background-color: #F00;
                border: 0;
                color: #FFF;
                cursor: pointer;
                margin-top:15px;
            }

            label {
                line-height:35px;
            }

        </style>



        <script src="http://code.jquery.com/jquery-1.10.2.js"></script>

        <script>
            function validate() {
                var output = true;
                $(".signup-error").html('');

                if ($("#personal-field").css('display') != 'none') {
                 if (!($("#pannumber").val())) {
                        output = false;
                        $("#pannumber-error").html("Required");
                    }
                    if (!($("#mobile1").val())) {
                        output = false;
                        $("#mobile1-error").html("Required");
                    }
                    if (!($("#name").val())) {
                        output = false;
                        $("#name-error").html("Required");
                    }
                    if (!($("#district").val())) {
                        output = false;
                        $("#district-error").html("Required");
                    }
                    if (!($("#state").val())) {
                        output = false;
                        $("#state-error").html("Required");
                    }
                    if (!($("#res_pin").val())) {
                        output = false;
                        $("#pin-error").html("Required");
                    }
                    if (!($("#dob").val())) {
                        output = false;
                        $("#dob-error").html("Required!");
                    }
                     if (!($("#email").val())) {
                        output = false;
                        $("#email-error").html("Required!");
                    }
                    /*if (!($("#adhar_number").val())) {
                        output = false;
                        $("#adhar-error").html("Adhar number required");
                    }
                    if (!($("#mobile1").val())) {
                        output = false;
                        $("#mobile1-error").html("Mobile number required");
                    }

                    if (!($("#dob").val())) {
                        output = false;
                        $("#dob-error").html("Date of Birth required!");
                    }
                     if (!($("#po").val())) {
                        output = false;
                        $("#po-error").html("Post Office Name  required!");
                    }
                    if (!($("#ps").val())) {
                        output = false;
                        $("#ps-error").html("Polict station Name  required!");
                    }
                    if (!($("#district").val())) {
                        output = false;
                        $("#district-error").html("District Name  required!");
                    }
                     if (!($("#state").val())) {
                        output = false;
                        $("#state-error").html("State Name  required!");
                    }
                    if (!($("#city").val())) {
                        output = false;
                        $("#city-error").html("City Name  required!");
                    }
                    if (!($("#pin").val())) {
                        output = false;
                        $("#pin-error").html("Pincode   required!");
                    }*/
                }

                if ($("#password-field").css('display') != 'none') {
                   if (!($("#in_institute_name").val())) {
                        output = false;
                        $("#in_institute_name-error").html("Required!");
                    }

                    
                   

                    

                    
                }

                if ($("#contact-field").css('display') != 'none') {
                    /*if (!($("#phone").val())) {
                        output = false;
                        $("#phone-error").html("Phone required!");
                    }

                    if (!($("#email").val())) {
                        output = false;
                        $("#email-error").html("Email required!");
                    }

                    if (!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                        $("#email-error").html("Invalid Email!");
                        output = false;
                    }

                    if (!($("#address").val())) {
                        output = false;
                        $("#address-error").html("Address required!");
                    }*/
                }

                return output;
            }

            $(document).ready(function () {
                $("#next").click(function () {
                    var output = validate();
                    if (output === true) {
                        var current = $(".active");
                        var next = $(".active").next("li");
                        if (next.length > 0) {
                            $("#" + current.attr("id") + "-field").hide();
                            $("#" + next.attr("id") + "-field").show();
                            $("#back").show();
                            $("#finish").hide();
                            $(".active").removeClass("active");
                            next.addClass("active");
                            if ($(".active").attr("id") == $("li").last().attr("id")) {
                                $("#next").hide();
                                $("#finish").show();
                            }
                        }
                    }
                });


                $("#back").click(function () {
                    var current = $(".active");
                    var prev = $(".active").prev("li");
                    if (prev.length > 0) {
                        $("#" + current.attr("id") + "-field").hide();
                        $("#" + prev.attr("id") + "-field").show();
                        $("#next").show();
                        $("#finish").hide();
                        $(".active").removeClass("active");
                        prev.addClass("active");
                        if ($(".active").attr("id") == $("li").first().attr("id")) {
                            $("#back").hide();
                        }
                    }
                });

                $("input#finish").click(function (e) {
                    var output = validate();
                    var current = $(".active");

                    if (output === true) {
                        return true;
                    } else {
                        //prevent refresh
                        e.preventDefault();
                        $("#" + current.attr("id") + "-field").show();
                        $("#back").show();
                        $("#finish").show();
                    }
                });
            });

            // Data Picker Initialization
$('.datepicker').datepicker({
  inline: true
});
        </script>

    </head>
    <body >
        
        <div class="container"  >
            
            <div>
            <center>
            <H2 style="color:blue">NATIONAL YOUTH COUNCIL OF EDUCATION & DEVELOPMENT</H2>
            <h3><U>APPLICATION FOR A NEW CENTER</U></h3>
            </div>
            
            
        <ul id="signup-step">
             <li id="agreement"> Information & Acknowledgement</li>
            <li id="personal" class="active">Applicant (Institution Head) Information</li>
            <li id="password">Print Form</li>
            <li id="contact">Upload Documents</li>
        </ul>

        <?php
        if (isset($success)) {
            echo '<div>User record inserted successfully</div>';
        }

        $attributes = array('name' => 'frmRegistration', 'enctype' => 'multipart/form-data',   'id' => 'signup-form');
        echo form_open($this->uri->uri_string(), $attributes);
        ?>


     <div id="personal-field">

    <div class="form-row">
        <div class="form-group col-md-4">
    <label>Franchise For<font color="red">*</font></label><span id="ddl1-error" class="signup-error"></span>
    <select class="form-control" id="ddl_location" name="ddl_location">
      <option value="Rural">Rural</option>
      <option value="Urban">Urban</option>
    </select>
    </div>
    <div class="form-group col-md-4">
    <label>Pan Number<font color="red">*</font></label><span id="pannumber-error" class="signup-error"></span>
    <div>
        <input type="text" name="pannumber" id="pannumber" class="form-control" maxlength="10" />
    </div> 
    </div>
        <div class="form-group col-md-4">
            <label>AADHAAR Number</label><span id="adhar-error" class="signup-error"></span>
            <div>
                <input type="number" name="adhar_number" id="adhar_number" class="form-control" maxlength="12" />
            </div>
        </div>

    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
    <label>Name(As per PAN)<font color="red">*</font></label><span id="name-error" class="signup-error"></span>
    <div>
        <input type="text" name="name" id="name" class="form-control" />
    </div></div>
    <div class="form-group col-md-6">
    <label>Email<font color="red">*</font></label><span id="email-error" class="signup-error"></span>
    <div>
        <input type="email"  name="email" id="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" />
    </div>
    </div>
   </div>

    <div class="form-row">
    <div class="form-group col-md-4">
    
        <label>Date of Birth<font color="red">*</font></label><span id="dob-error" class="signup-error"></span>   
        <div >
        <input type="date" name="dob" id="dob" class="form-control" />
        </div>
    </div>

        <div class="form-group col-md-4">
            <label>Gender</label>
            <div>
                <select name="gender" id="gender" class="form-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>

        <div class="form-group col-md-4">
            <label>Religion</label><span id="Religion" class="signup-error"></span>
            <div>
                <select name="religion" id="religion" class="form-control">
                    <option value="male">Select One</option>
                    <option value="Hinduism">Hinduism</option>
                    <option value="Islam">Islam</option>
                    <option value="Jainism">Jainism</option>
                    <option value="Buddhist">Buddhist</option>
                    <option value="Cristian">Cristian</option>
                    <option value="Parsi">Parsi</option>
                    <option value="Others">Others</option>
                </select>
            </div>
        </div>
    </div>
    

    <div class="form-row">
        <div class="form-group col-md-4">
            <label>Category</label>
            <div>
                <select name="category" id="category" class="form-control">
                    <option value="general">General</option>
                    <option value="OBC A">OBC A</option>
                    <option value="OBC B">OBC B</option>
                    <option value="ST">ST</option>
                    <option value="SC">SC</option>
                </select>
            </div>
        </div>
        
        <div class="form-group col-md-4">
            <label>Mobile Number<font color="red">*</font></label><span id="mobile1-error" class="signup-error" ></span>
            <div>
                <input type="text" name="mobile1" id="mobile1" class="form-control" maxlength="10" />
            </div>
        </div>
        <div class="form-group col-md-4">
            <label>Alternate Number</label>
            <div>
                <input type="text" name="mobile2" id="mobile2" class="form-control" maxlength="10" />
            </div>
        </div>
    </div>

    <label class="mt-8"> <B><U>Communication Address::</U></B></label><span id="" class=""></span>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label> Village / Town</label><span id="" class="signup-error"></span>
            <div>
                <input type="text" name="vill" id="vill" class="form-control" />
            </div>
        </div>
        <div class="form-group col-md-4">
            <label> Post office</label><span id="po-error" class="signup-error"></span>
            <div>
                <input type="text" name="res_po" id="po" class="form-control" />
            </div>
        </div>
        <div class="form-group col-md-4">
            <label> Police Station</label><span id="ps-error" class="signup-error"></span>
            <div>
                <input type="text" name="res_ps" id="ps" class="form-control" />
            </div>
        </div></div>

     <div class="form-row">
        <div class="form-group col-md-4">
            <label> District<font color="red">*</font></label><span id="district-error" class="signup-error"></span>
            <div>
                <input type="text" name="res_dist" id="district" class="form-control" />
            </div>
        </div>
        <div class="form-group col-md-4">
            <label> State<font color="red">*</font></label><span id="state-error" class="signup-error"></span>
            <div>
                <input type="text" name="res_state" id="state" class="form-control" />
            </div>
        </div>
        
        <div class="form-group col-md-4">
            <label> Pin Code<font color="red">*</font></label><span id="pin-error" class="signup-error"></span>
            <div>
                <input type="number" name="res_pin" id="res_pin" class="form-control" maxlength="6" />
            </div>
        </div>
    </div>

   </div>

   

    <div id="password-field" style="display:none;">
       <div class="row">
        <div class="form-group col-md-4">
          <label>Institution status</label>
          <div>
            <select name="in_status" id="in_status" class="form-control">
              <option value="Running  ">Running </option>
              <option value="Closed">Closed</option>
              <option value="Startup  ">Startup </option>
              <option value="Yet to be Start">Yet to be Start</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-8">
          <label>Proposed Institute Name<font color="red">*</font></label>
          <span id="in_institute_name-error" class="signup-error"></span>
          <div>
            <input type="text" name="in_institute_name" id="in_institute_name" class="form-control" />
          </div>
        </div>
    </div>

   <div class="row">
    <div class="form-group col-md-4">
          <label>Institution Type </label>
          <div>
            <select name="in_institute_type" id="in_institute_type" class="form-control">
              <option value="Private Limited">Private Limited </option>
              <option value="Public Limited">Public Limited </option>
              <option value=" Semi Government"> Semi Government </option>
              <option value="Trust">Trust</option>
              <option value="Society">Society</option>
              <option value="Proprietorship">Proprietorship</option>
              <option value="Proprietorship">Partnership Firm</option>
            </select>
          </div>
        </div>
        <div class="form-group col-md-4">
          <label>Establishment year </label>
          
          <div>
            <input type="date" name="in_establishment" id="in_establishment" class="form-control" />
          </div>
        </div>

        <div class="form-group col-md-4">
          <label>Name of Trust/NGO/LLP </label>
          
          <div>
            <input type="text" name="in_org_name" id="in_org_name" class="form-control" />
          </div>
        </div>
    </div>
       
       <label class="mt-8"> <B><U>Institute Address::</U></B></label><span id="" class=""></span>
      
   
        <div class="form-row">
            <div class="form-group col-md-4">
          <label>Village/Town</label>
          <span id="in_state-error" class="signup-error"></span>
          <div>
            <input type="text" name="in_village" id="in_village" class="form-control" />
          </div>
        </div>
        <div class="form-group col-md-4">
          <label>Road / Street / City</label>
          <span id="in_town-error" class="signup-error"></span>
          <div>
            <input type="text" name="in_town" id="in_town" class="form-control" />
          </div>
        </div>
        <div class="form-group col-md-4">
          <label>Enter PIN Code</label>
          <span id="in_pin-error" class="signup-error"></span>
          <div>
            <input type="text" name="in_pin" id="in_pin" class="form-control" maxlength="6" />
          </div>
        </div>
        </div>
         
         

        <div class="row">            

        <div class="form-group col-md-4">
          <label>Enter Post Office</label>
          <span id="in_po-error" class="signup-error"></span>
          <div>
            <input type="text" name="in_po" id="in_po" class="form-control" />
          </div>
        </div>
        
        <div class="form-group col-md-4">
          <label>Enter Police Station</label>
          <span id="in_ps-error" class="signup-error"></span>
          <div>
            <input type="text" name="in_ps" id="in_ps" class="form-control" />
          </div>
        </div>
        
         <div class="form-group col-md-4">
          <label>Enter District</label>
          <span id="in_dist-error" class="signup-error"></span>
          <div>
            <input type="text" name="in_dist" id="in_dist" class="form-control" />
          </div>
        </div>

        <div class="row"> 
            <div class="form-group col-md-12" >
            <label>&nbsp;&nbsp;&nbsp;<u>Desire Depertments:</u></label>
            <?php
                 if(!empty($course_list)){
                    foreach ($course_list as $key => $value) { ?><br>&nbsp;&nbsp;&nbsp;
                    <input type="checkbox" name="Course[]" value="<?=$value['Department_name']?>" > <b><?=$value['Department_name']?></b> (<?=$value['Department_id']?>)&nbsp;&nbsp;&nbsp;&nbsp;
                    
                    <?php }
                 }
             ?> 
             </div>
         </div>
        </div>


        </div>


        <div id="contact-field" style="display:none;">

            <label>Your Messege to NYCED</label><span id="address-error" class="signup-error"></span>
            <div><textarea name="message" id="message" class="form-control" rows="5" cols="50"></textarea></div>

          



            <label>Applicant Picture:</label><span id="picture-error" class="signup-error"></span>
            <div><input type="file" name="picture" id="picture" class="form-control" /></div>
            <label>Identity Proof: Self Attested </label><span id="aadhar_pic-error" class="signup-error"></span>
            <div><input type="file" name="aadhar_pic" id="aadhar_pic" class="form-control" /></div>
             <label>PAN Card: Front Side</label><span id="picture-error" class="signup-error"></span>
            <div><input type="file" name="pan_pic" id="pan_pic" class="form-control" /></div>


             


        </div>
        <div></div>

        <div>
            <input class="btn btn-warning btn-lg btn-block" type="button" name="back" id="back" value="Back" style="display:none;">
     <input class="btn btn-primary btn-lg btn-block" type="button" name="next" id="next" value="Next" >
  <input class="btn btn-info btn-lg btn-block" type="submit" name="finish" id="finish" value="Finish" style="display:none;">
        </div>
        <?php echo form_close(); ?>
</div>
    </body>
    
</html>
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}


/*var r_po = document.getElementById("po");
var r_ps = document.getElementById("ps");

var c_po = document.getElementById("in_po");
var c_ps = document.getElementById("in_ps");
  
        function check() {
            r_po.setAttribute('value', 'defaultValue');
            c_po.innerHTML = 
                   "Value = " + "'" + r_po.value + "'";
                  c_po.value=c_po.value;

        }*/


</script> 