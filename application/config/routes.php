<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'Wisata/home';
$route['login'] = 'Wisata/login';
$route['(:any)'] = 'Wisata/view_lokasi/$1';

$route['default_controller'] = 'Wisata/home';
$route['login'] = 'Wisata/login';
$route['(:any)'] = 'Wisata/view_lokasi/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
