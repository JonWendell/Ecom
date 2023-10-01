<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
 // Existing routes
 $routes->get('/product', 'ProductController::index');
 $routes->get('edit/(:num)', 'ProductController::edit/$1');
 $routes->post('save', 'ProductController::save');
 $routes->get('delete/(:num)', 'ProductController::delete/$1');
 $routes->get('/product/view/(:num)', 'ProductController::view/$1');
 $routes->get('/register', 'AuthController::register');
$routes->post('/register', 'AuthController::register');
$routes->get('/login', 'AuthController::login');
$routes->post('/login', 'AuthController::login');
$routes->get('product', 'ProductController::index', ['filter' => 'auth']);


$routes->get('/logout', 'AuthController::logout');
$routes->group('protected', ['filter' => 'auth'], function($routes)
{
    $routes->get('product', 'ProductController::index'); // Protect the product page
});
