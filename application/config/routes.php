<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome_ctrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'Welcome_ctrl/about';
$route['gallery'] = 'Welcome_ctrl/gallery';
$route['contact'] = 'Welcome_ctrl/contact';
$route['login'] = 'Welcome_ctrl/login';
$route['forgot_pass'] = 'Welcome_ctrl/forgot_pass';
$route['activity'] = 'Welcome_ctrl/activity';
$route['donate'] = 'Welcome_ctrl/donate';
$route['members'] = 'Welcome_ctrl/members';

$route['admission'] = 'Welcome_ctrl/admission';
$route['pay'] = 'Welcome_ctrl/payment';