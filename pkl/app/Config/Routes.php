<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('akun', 'AkunController::index');

$routes->post('akun/save', 'AkunController::save');
$routes->get('akun/edit/(:segment)', 'AkunController::edit/$1');
$routes->put('akun/update/', 'AkunController::update/$1');
$routes->get('akun/delete/(:segment)', 'AkunController::delete/$1');
$routes->get('detail', 'AkunController::detail');