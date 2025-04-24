<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('nosotros', 'Home::somos');

$routes->get('contacto', 'Home::contacto');

$routes->get('comercializacion', 'Home::comercializacion');

$routes->get('terminos', 'Home::terminos');

$routes->get('login', 'Home::login');

$routes->get('registro', 'Home::registro');
