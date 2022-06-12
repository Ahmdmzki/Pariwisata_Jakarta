<?php
defined('BASEPATH') or exit('No direct script access allowed');
$route['default_controller'] = 'Wisata/home';
$route['login'] = 'Authentication/login';
$route['register'] = 'Authentication/register';
$route['logout'] = 'Authentication/logout';
$route['komentar/(:any)'] = 'Wisata/editKomentar/$1/$2';
$route['hapus-komentar/(:any)/(:any)'] = 'Wisata/hapusKomentar/$1/$2';
$route['(:any)'] = 'Wisata/view_lokasi/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
