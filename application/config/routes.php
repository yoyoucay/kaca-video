<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] = 'auth/register';
$route['login'] = 'auth/login';
$route['forgot-password'] = 'auth/forgot_password';
$route['logout'] 	= 'auth/logout';
$route['v/(:any)/(:any)'] 	= 'auth/verify_register/$1/$2'; // verify Email
$route['v_f/(:any)/(:any)'] 	= 'auth/verify_forgot/$1/$2'; // verify Lupa password

$route['user/(:any)']   = 'people/user/$1';
$route['settings'] = 'people/settings';
$route['set_settings'] = 'people/set_Settings';

// $route['admin'] = 'auth/administrator';
$route['s']  = 'auth/search'; // pencarian
$route['feedback'] = 'auth/view_feedback';

$route['c/(:any)'] = 'confide/viewchat/$1'; // chat

$route['default_controller'] = 'auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
