<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');

$routes->get('/', 'EncryptController::index');
$routes->post('/encrypt', 'EncryptController::encrypt');
$routes->post('/decrypt', 'EncryptController::decrypt');

