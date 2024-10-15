<?php

use CodeIgniter\Router\RouteCollection;
use DeepCopy\Filter\Filter;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/admin', 'Admin::index', ['filter' => 'role:admin']);
$routes->get('/admin/user_list', 'Admin::user_list', ['filter' => 'role:admin']);
$routes->get('/admin/tambah_user', 'Admin::tambah_user', ['filter' => 'role:admin']);
$routes->get('/admin/(:num)', 'Admin::detail/$1', ['filter' => 'role:admin']);


// $routes->group('admin', ['filter' => 'role:admin'], function($routes) {
//     $routes->get('/admin', 'AdminController::index');
// });

// $routes->group('user', ['filter' => 'rolecheck:user'], function($routes) {
//     $routes->get('/user', 'UserController::index');
// });
