<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['home'] = 'Home/index';
$route['login'] = 'auth/index';
$route['logout'] = 'auth/logout';
$route['export_detail_kegiatan/(:any)'] = 'home/export_detail_kegiatan/$1';
$route['export_excel'] = 'home/export';
$route['list/(:any)/destroy'] = 'listbahan/destroy/$1';
$route['list/(:any)/edit'] = 'listbahan/edit/$1';
$route['list/(:any)/update'] = 'listbahan/update/$1';
$route['list/create'] = 'listbahan/create';
$route['list/store'] = 'listbahan/store';

$route['kategori/(:any)/edit'] = 'kategori/edit/$1';
$route['kategori/(:any)/delete'] = 'kategori/delete/$1';
$route['kategori/(:any)/update'] = 'kategori/update/$1';

$route['transaksi/(:any)/edit'] = 'transaksi/edit/$1';
$route['transaksi/(:any)/delete'] = 'transaksi/delete/$1';
$route['transaksi/(:any)/update'] = 'transaksi/update/$1';

$route['users/(:any)/edit'] = 'users/edit/$1';
$route['users/(:any)/delete'] = 'users/delete/$1';
$route['users/(:any)/update'] = 'users/update/$1';

$route['saldo/(:any)/edit'] = 'saldo/edit/$1';
$route['saldo/(:any)/delete'] = 'saldo/delete/$1';
$route['saldo/(:any)/update'] = 'saldo/update/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
