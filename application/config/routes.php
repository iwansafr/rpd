<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['home'] = 'Home/index';
$route['kegiatan/(:any)/destroy'] = 'kegiatan/destroy/$1';
$route['kegiatan/(:any)/detail'] = 'kegiatan/detail/$1';
$route['kegiatan/(:any)/edit'] = 'kegiatan/edit/$1';
$route['kegiatan/(:any)/update'] = 'kegiatan/update/$1';
$route['login'] = 'auth/index';
$route['logout'] = 'auth/logout';
$route['export_detail_kegiatan/(:any)'] = 'home/export_detail_kegiatan/$1';
$route['export_excel'] = 'home/export';
$route['kegiatan/(:any)/update'] = 'kegiatan/update/$1';
$route['list/(:any)/destroy'] = 'listbahan/destroy/$1';
$route['list/(:any)/edit'] = 'listbahan/edit/$1';
$route['list/(:any)/update'] = 'listbahan/update/$1';
$route['list/create'] = 'listbahan/create';
$route['list/store'] = 'listbahan/store';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
