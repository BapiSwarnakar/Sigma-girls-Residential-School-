<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html >

<html>
<head>
<title>Sigma Mission</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta name="description" content="Sigma Mission" />
<meta name="author" content="Sigma Mission School Kaliachak" />

<link href="<?php echo base_url(); ?>assets/layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="clear"> 
    <!-- ################################################################################################ -->
    <nav>
      <ul>
        <li><a href="<?php echo base_url(); ?>" > Home</a></li>
        <li><a href="<?php echo base_url('contact'); ?>">Contact</a></li>
        <li><a href="#">Login</a></li>
        <li><a target="_new" href="<?php echo base_url(); ?>assets/FORM_SIGMA_MISSION.pdf">Form</a></li>
        <li><a href="#">Prospectus</a></li>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <img src="<?php echo base_url(); ?>assets/images/sigma-1.png"> 
      <!--<h1><a href="#">Sigma Mission</a></h1>
      <p>A Residential School</p> -->
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend></legend>
          <a style="background-color: blue; padding: 7px; " href="<?= base_url("user"); ?>" class="btn btn-primary">Online Admission</a>
          <a style="background-color: green; padding: 7px; " href="#" class="btn btn-primary">Payment</a>
          
          
        </fieldset>
      </form>
    </div>
    <!-- ################################################################################################ --> 
  </header>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a  href="<?php echo base_url(); ?>">Home</a></li>

        <li><a class="drop" href="<?php echo base_url('about'); ?>">About</a>
          <ul>
            <li><a href="<?php echo base_url('about'); ?>">Our School</a></li>
            <li><a href="#">Management</a></li>
            <li><a href="#">Success Stories</a></li>
            
          </ul>
        </li>

        <li><a class="drop" href="#">Academic</a>
          <ul>
            <li><a href="#">Curriculum</a></li>
            <li><a href="#">Syllebus</a></li>
            <li><a href="#">Fee Structure</a></li>
            <li><a href="#">Scholarship</a></li>
          </ul>
        </li>

        <li><a class="drop" href="#">Staff</a>
          <ul>
            <li><a href="#">Teaching Staff</a></li>
            <li><a href="#">Non-Teaching Staff</a></li>            
          </ul>
        </li>

        <li><a  href="#">Download</a></li>

        <li><a  href="<?php echo base_url('gallery'); ?>">Gallery</a></li>

        <li><a  href="#">Announcement</a></li>
        
        <li><a href="#">Contact</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 
<!-- ################################################################################################ -->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
      <!-- ################################################################################################ -->
      <figure id="slide-1"><a class="view" href="#"><img src="<?php echo base_url(); ?>assets/images/demo/slider/slide21.jpg" alt=""></a>
        <figcaption>
          <h2>Welcome to Sigma Mission</h2>
          <!-- <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p> -->
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-2"><a class="view" href="#"><img src="<?php echo base_url(); ?>assets/images/demo/slider/slide31.jpg" alt=""></a>
        <figcaption>
          <h2>A World Class Residential School</h2>
          <!-- <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>-->
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-3"><a class="view" href="#"><img src="<?php echo base_url(); ?>assets/images/demo/slider/slide41.jpg" alt=""></a>
        <figcaption>
          <h2>Choose us for a Bright Future</h2>
          <!-- <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>-->
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-4"><a class="view" href="#"><img src="<?php echo base_url(); ?>assets/images/demo/slider/slide11.jpg" alt=""></a>
        <figcaption>
          <h2>Study Beyond the Class Room</h2>
          <!-- <p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p>-->
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <figure id="slide-5"><a class="view" href="#"><img src="<?php echo base_url(); ?>assets/images/demo/slider/slide51.jpg" alt=""></a>
        <figcaption>
          <h2>Dapiensociis temper donec</h2>
          <!--<p>Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis.</p> -->
          <p class="right"><a href="#">Continue Reading &raquo;</a></p>
        </figcaption>
      </figure>
      <!-- ################################################################################################ -->
      <ul id="slide-tabs">
        <li><a href="#slide-1">All About The University</a></li>
        <li><a href="#slide-2">Why You Should Study With Us</a></li>
        <li><a href="#slide-3">Education And Student Experience</a></li>
        <li><a href="#slide-4">Alumni And Its Donors</a></li>
        <li><a href="#slide-5">Qualified Management Team</a></li>
      </ul>
      <!-- ################################################################################################ --> 
    </div>
  </div>
</div>




<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="group btmspace-30"> 
        <!-- Left Column -->
        <div class="one_quarter first"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li class="btmspace-15"><h2 style="color:blue;">Secretary's Desk</h2>
              <center><img class="borderedbox" src="<?php echo base_url(); ?>assets/images/secretary.png" alt=""></center>
              <p style="text-align:justify;color:black;">I am feeling heartily pride and pleasure for “SIGMA MISSION”, since 2020 till now paying the best effort for society to prepare quality student not only for academic purpose but also build-up in them social values.
                                    We provide to students an excellent infrastructure facility, help the student to improve their hidden potential and personality to give opportunities and large number of activities, provide clarity in thoughts and decision making ability to set and achieve better goals in life.
                                   SIGMA MISSION believes in student also making them believer, self-development, self-belief, prepare for future, knowing the subject matter very well is our key place to work.
</p>
<p style="color:black;"> From , </p>
  <p style="text-align:right;color:black;">Sk Sahabuddin Alam (Secretary)
</p>

<br>
            </li>
            <li class="btmspace-15"><a href="#"><h2 style="color:blue"><i class="fa fa-bullhorn pright-10"></i> Notice Board </h2></a> </li>   


            <marquee direction="up">

              <p style="color: red;">Admission Forms for Class XI for the session 2022-23 are available from the school campus as well as online.</p>

              <p style="color: red;">Admission Form must be Submitted before 20th March,2022</p>
              <p style="color: red;">Admission test will be held on 23rd  March,2022,Wednesday at 12:00 pm.</p>
              <p style="color: red;">Result will be published on 27th  March,2022</p>
              <p style="color: red;">Admission starts from 1st April,2022</p>

            </marquee>       
          </ul>







          <!-- ################################################################################################ --> 
        </div>
        <!-- / Left Column -->