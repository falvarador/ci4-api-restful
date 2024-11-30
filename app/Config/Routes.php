<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/api/products', 'Products::index');
$routes->get('/api/products/(:num)', 'Products::show/$1');
$routes->post('/api/products', 'Products::create');
$routes->put('/api/products/(:num)', 'Products::update/$1');
