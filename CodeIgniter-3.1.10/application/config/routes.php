<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['posts/update'] = 'Posts/update';
$route['posts/create'] = 'Posts/create';
$route['posts'] = 'Posts/index';
$route['posts/(:any)'] = 'Posts/view/$1';
$route['default_controller'] = 'Pages/view';
$route['(:any)'] = 'Pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;
