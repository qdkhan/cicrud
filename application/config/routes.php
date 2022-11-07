<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Custom Route Definition
$route['site-about'] = 'site/about';
$route['site-index'] = 'site/index';
$route['site-home'] = 'site/home';
$route['site-site'] = 'site/site';
$route['site-service/(:num)/(:name)'] = 'site/service/$1/$2';
// $route['site-service'] = 'site/service';
$route['site-variable'] = 'site/variable';
$route['load-model'] = 'site/loadModel';

//CRUD routes
$route['create-user'] = 'UserController/store';
$route['create-message'] = 'UserController/createMessage';
$route['get-data-user'] = 'UserController/userList';
$route['delete-user/(:any)'] = 'UserController/deleteRecord/$1';
$route['select-like'] = 'UserController/selectLike';

//Retrive Joins Data
$route['data-joins'] = 'UserController/joinsData';

//Helper Model
$route['helper/view-form'] = 'HelperController/formHelper';
$route['helper/form-submit'] = 'HelperController/saveData';
