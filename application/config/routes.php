<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['about'] = 'page/about';
$route['contact'] = 'page/contact';

$route['article/(:any)'] = 'article/show/$1';
$route['admin'] = 'admin/dashboard';
