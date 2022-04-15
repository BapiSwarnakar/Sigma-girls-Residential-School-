<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*  SAMPLE SETUP AUTOLOAD TARAK
$autoload['libraries'] = array('database','session','email','validation');
$autoload['helper'] = array('url','form','text','date','security'); 
$autoload['model'] = array(); 
$autoload['config'] = array();   

*/


$autoload['packages'] = array();


//$autoload['libraries'] = array();
$autoload['libraries'] = array('database','session','form_validation','upload');

$autoload['drivers'] = array();


$autoload['helper'] = array('url','html','form','file');
//$autoload['helper'] = array('url','form','text','date','security'); 


$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array();

