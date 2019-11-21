<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['home'] = 'Home/index';
$route['create_detail_kegiatan'] = 'home/create_detail_kegiatan';
$route['add_detail_kegiatan'] = 'home/add_detail_kegiatan';
$route['add_list_kegiatan'] = 'home/add_list_kegiatan';
$route['home/(:any)/destroy'] = 'home/destroy/$1';
$route['detail_jenis_kegiatan/(:any)'] = 'home/detail_jenis_kegiatan/$1';
$route['kegiatan/(:any)/edit'] = 'home/edit/$1';
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
