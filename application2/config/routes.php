<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] = 'auth/register';
$route['login'] = 'auth/login';
$route['forgot-password'] = 'auth/forgot_password';
$route['logout'] 	= 'auth/logout';
$route['v/(:any)/(:any)'] 	= 'auth/verify_register/$1/$2'; // verify Email
$route['v_f/(:any)/(:any)'] 	= 'auth/verify_forgot/$1/$2'; // verify Lupa password

$route['user/(:any)']   = 'user/views/$1'; //Profile

// $route['admin'] = 'auth/administrator';

// $route['d/(:any)'] = 'confide/view_post/$1'; // Details page postingan
// $route['change']  = 'user/settings'; // Ubah data diri
$route['s']  = 'auth/search'; // pencarian
$route['feedback'] = 'auth/view_feedback';
// $route['(:any)']	    = 'user/view/$1';
$route['user/(:any)']   = 'user/views/$1'; // profil
$route['e/(:any)/(:any)'] 	= 'confide/update_confide/$1/$2'; // edit postingan
$route['u/up/(:any)/(:any)'] 	= 'confide/update_confidePhoto/$1/$2'; // edit postingan Photo
$route['u/up/(:any)/(:any)'] 	= 'confide/update_confideVideo/$1/$2'; // edit postingan Video
// $route['delete/(:any)'] 			= 'confide/delete/$1';

$route['c/(:any)'] = 'confide/viewchat/$1'; // chat

$route['default_controller'] = 'auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
