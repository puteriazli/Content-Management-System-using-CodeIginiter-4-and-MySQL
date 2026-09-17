<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman utama / dashboard
$routes->get('/', 'Dashboard::index');

// ================= USER =================
$routes->get('/users', 'Users::index');
$routes->get('/users/create', 'Users::create');
$routes->post('/users/store', 'Users::store');
$routes->get('/users/edit/(:num)', 'Users::edit/$1');
$routes->post('/users/update/(:num)', 'Users::update/$1');
$routes->get('/users/delete/(:num)', 'Users::delete/$1');

// ================= PRODUCT =================
$routes->get('/products', 'Products::index');
$routes->get('/products/create', 'Products::create');
$routes->post('/products/store', 'Products::store');
$routes->get('/products/edit/(:num)', 'Products::edit/$1');
$routes->post('/products/update/(:num)', 'Products::update/$1');
$routes->get('/products/delete/(:num)', 'Products::delete/$1');

// ================= TRANSACTION =================
$routes->get('/transactions', 'Transactions::index');
$routes->get('/transactions/create', 'Transactions::create');
$routes->post('/transactions/store', 'Transactions::store');
$routes->get('/transactions/edit/(:num)', 'Transactions::edit/$1');
$routes->post('/transactions/update/(:num)', 'Transactions::update/$1');
$routes->get('/transactions/delete/(:num)', 'Transactions::delete/$1');
