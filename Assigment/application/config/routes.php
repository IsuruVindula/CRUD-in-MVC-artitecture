<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['Member_registration/validation'] = 'Member_registration/validation';
$route['CI-tutorials/new/'] = 'CI-tutorials/new/Controller/go';

$route['default_controller'] = 'CI-tutorials/new/Member_registration/go';
$route['404_override'] = '';
$route['translate_uri_dashes'] = false;

