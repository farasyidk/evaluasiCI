<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'welcome/index';
$route['perkuliahan/dosens/(:any)'] = 'welcome/dDosen/$1';
$route['perkuliahan/(:any)'] = 'welcome/index/$1';
$route['ruang'] = 'welcome/index/ruang';
$route['grafik'] = 'welcome/grafik';
$route['login'] = 'login/index';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
