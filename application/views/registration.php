<style>


.{
  margin: 0
}

.regcontainer {
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
  height: 160vh;
  background-color: whitesmoke;
}

.regcontainer h1 {
  color: white;
  font-family: sans-serif;
  margin: 10px;
}

.registartion-form {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 600px;
  color: rgb(255, 255, 255);
  font-size: 14px;
  font-family: arial;
  background-color: #39b4fa;
  padding: 10px;
}

.registartion-form input,
.registartion-form select,
.registartion-form textarea {
  border: none;
  padding: 5px;
  margin-top: 10px;
  font-family: sans-serif;
}

.registartion-form input:focus,
.registartion-form textarea:focus {
  box-shadow: 3px 3px 10px rgb(228, 228, 228), -3px -3px 10px rgb(224, 224, 224);
}

.registartion-form .submit {
  width: 100%;
  padding: 8px 0;
  font-size: 20px;
  color: white;
  background-color: #0466dd;
  border-radius: 5px;
}

.registartion-form .submit:hover {
  box-shadow: 3px 3px 6px rgb(0, 214, 0);
}
</style>
<!--------------css for reg form   onsubmit="return formValidation()" ------------>

<div class="regcontainer">
  <h2>Member Registration Form</h2>
  <h4>Already a Member ? <a href="<?php echo base_url('login');?>">Login</a></h4>

  <form name="registration" class=""  method="post" action="<?php echo base_url() ?>mzs_site_controller/insert_member" >
   
    <table class="registartion-form">
      <tr>
        <td><label for="name">Full Name:</label></td>
        <td> <input Class="form-control" type="text" name="name" id="name" placeholder="your name" value="<?= set_value('name'); ?>">
             <h5 style="color: #b00b0b"><?php echo form_error('name'); ?></h5>
        </td>
      </tr>
      <tr>
        <td><label for="email">Email:</label></td>
        <td> <input Class="form-control" type="text" name="email" id="email" placeholder="your email" value="<?= set_value('email'); ?>">
        <h5 style="color: #b00b0b"><?php echo form_error('email'); ?></h5>
      </td>
      </tr>
      <tr>
        <td><label for="password">Password:</label></td>
        <td> <input Class="form-control"  type="password" name="password" id="password" value="<?= set_value('password'); ?>">
          <h5 style="color: #b00b0b"><?php echo form_error('password'); ?></h5>
        </td>
      </tr>
      <tr>
        <td><label for="password">Confirm Password:</label></td>
        <td> <input Class="form-control" type="password" name="cpassword" id="cpassword" value="<?= set_value('cpassword'); ?>">
          <h5 style="color: #b00b0b"><?php echo form_error('cpassword'); ?></h5></td>
      </tr>
      <tr>
        <td><label for="phoneNumber">Phone Number:</label></td>
        <td> <input Class="form-control" type="number" name="phoneNumber" id="phoneNumber" value="<?= set_value('phoneNumber'); ?>">
          <h5 style="color: #b00b0b"><?php echo form_error('phoneNumber'); ?></h5>

        </td>
      </tr>
      <tr>
        <td><label for="gender">Last Class Attended At MZS: &nbsp; </label></td>
        <td>10 TH:  <input  type="radio" name="last_class" value="Madhyamik">&nbsp;
          12 TH:  <input  type="radio" name="last_class" value="Higher Secondary">&nbsp;
          Other:  <input type="radio" name="last_class" value="other">
        </td>
      </tr>
      <tr>
        <td><label for="batch">Batch/ Year of Passing</label></td>
        <td>
         <input Class="form-control" type="number" name="batch" id="batch" value="<?= set_value('batch'); ?>">
         <h5 style="color: #b00b0b"><?php echo form_error('batch'); ?></h5>
        </td>
      </tr>
      <tr>
        <td><label for="batch">Date Of Birth</label></td>
        <td>
         <input Class="form-control" type="text" name="dob" id="dob" value="<?= set_value('dob'); ?>">
         <h5 style="color: #b00b0b"><?php echo form_error('dob'); ?></h5>
        </td>
      </tr>
      <tr>
        <td><label for="batch">Guardian's Name</label></td>
        <td>
         <input Class="form-control" type="text" name="guardian" id="guardian" value="<?= set_value('guardian'); ?>">
         <h5 style="color: #b00b0b"><?php echo form_error('guardian'); ?></h5>
        </td>
      </tr>
      <tr>
        <td><label for="work">Current Proffession</label></td>
        <td>
          <select name="work" id="work" Class="form-control">
            <option value="">Select Proffession</option>
            <option value="Govt. Service">Govt. Service</option>
            <option value="Private Job">Private Job</option>
            <option value="Self Employed">Self Employed</option>
            <option value="Professional/Practissioner">Professional/Practissioner</option>
            <option value="Business">Business</option>
            <option value="Retired">Retired</option>
            <option value="Other">Other</option>
          </select>
        </td>
      </tr>
      <tr>
        <td><label for="batch">Organization's Name</label></td>
        <td>
         <input Class="form-control" type="text" name="organization" id="organization" value="<?= set_value('Organization'); ?>">
        </td>
      </tr>
      <tr>
        <td><label for="batch">Organization's Location</label></td>
        <td>
         <input Class="form-control" type="text" name="org_location" id="org_location" value="<?= set_value('org_location'); ?>">
        </td>
      </tr>
      <tr>
        <td><label for="Married_status">Maritial Status: &nbsp; </label></td>
        <td>Un-Married:  <input  type="radio" name="married_status" value="Un-Married">&nbsp;
          Married:  <input  type="radio" name="married_status" value="Married">&nbsp;
          Other:  <input  type="radio" name="married_status" value="Other">
        </td>
      </tr>
      <tr>
        <td><label for="zipcode">Zip Code:</label></td>
        <td> <input Class="form-control" type="number" name="zipcode" id="zipcode" value="<?= set_value('zipcode'); ?>"></td>
      </tr>
      <tr>
        <td><label for="about">Permanent Address:</label></td>
        <td><textarea Class="form-control"  name="address" id="address" placeholder="Full Address" value="<?= set_value('addesss'); ?>"></textarea>
               <h5 style="color: #b00b0b"><?php echo form_error('guardian'); ?></h5>
        </td>
      </tr>
      <tr>
        <td ></td><td> <input  type="submit" name="submit" class="submit" value="  Register Yourself  " /></td>
      </tr>
    </table>
  </form>
</div>

<br><br><br><br>

<script type='text/javascript'>

// Select all input elements for varification
const name = document.getElementById("name");
const email = document.getElementById("email");
const password = document.getElementById("password");
const cpassword = document.getElementById("cpassword");
const phoneNumber = document.getElementById("phoneNumber");

const language = document.getElementById("language");
const zipcode = document.getElementById("zipcode");

// function for form varification
function formValidation() {
  
  // checking name length
  if (name.value.length < 2 || name.value.length > 30) {
    alert("Name length should be more than 2 and less than 30");
    name.focus();
    return false;
  }
  // checking email
  if (email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/)) {
    alert("Please enter a valid email!");
    email.focus();
    return false;
  }
  // checking password
  if (!password.value.match(/^.{5,15}$/)) {
    alert("Password length must be between 5-15 characters!");
    password.focus();
    return false;
  }

  // checking password
  if (password.value != cpassword.value) {
    alert("Password Not Matched ...");
    cpassword.focus();
    return false;
  }

  // checking phone number
  if (!phoneNumber.value.match(/^[1-9][0-9]{9}$/)) {
    alert("Phone number must be 10 characters long number and first digit can't be 0!");
    phoneNumber.focus();
    return false;
  }
  // checking gender
  if (gender.gender.value === "") {
    alert("Please select your gender!");
    return false;
  }
  // checking language
  if (language.value === "") {
    alert("Please select your language!")
    return false;
  }
  // checking zip code
  if (!zipcode.value.match(/^[0-9]{6}$/)) {
    alert("Zip code must be 6 characters long number!");
    zipcode.focus();
    return false;
  }
  
  return true;
}

</script>