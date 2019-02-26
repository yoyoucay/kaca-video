<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['register'] 	= 'auth/register';
$route['login'] 	= 'auth/login';
$route['logout'] 	= 'auth/logout';
$route['v/(:any)/(:any)'] 	= 'auth/verify_register/$1/$2'; // verify Email
$route['f'] 	= 'auth/forgot_password'; // Lupa password
$route['v_f/(:any)/(:any)'] 	= 'auth/verify_forgot/$1/$2'; // verify Lupa password

$route['admin'] = 'auth/administrator';

$route['d/(:any)'] = 'confide/view_post/$1'; // Details page postingan
$route['change']  = 'user/settings'; // Ubah data diri
$route['s']  = 'auth/search'; // pencarian
$route['feedback'] = 'auth/view_feedback';
$route['(:any)']	    = 'user/view/$1';
$route['u/(:any)']   = 'user/views/$1'; // profil
$route['e/(:any)/(:any)'] 	= 'confide/update_confide/$1/$2'; // edit postingan
$route['u/up/(:any)/(:any)'] 	= 'confide/update_confidePhoto/$1/$2'; // edit postingan Photo
$route['u/up/(:any)/(:any)'] 	= 'confide/update_confideVideo/$1/$2'; // edit postingan Video
$route['delete/(:any)'] 			= 'confide/delete_confide/$1';

$route['c/(:any)'] = 'confide/viewchat/$1'; // chat

$route['s/video'] = 'video/view';
$route['s/video/p'] = 'video/create';
$route['s/video/(:any)'] = 'video/view_details/$1';
$route['s/video/u/(:any)'] = 'video/edit/$1'; // update
$route['s/video/d/(:any)'] = 'video/delete/$1'; // Delete

$route['default_controller'] = 'auth/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
