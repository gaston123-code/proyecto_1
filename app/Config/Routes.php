<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


$routes->get('nosotros', 'Home::somos');

$routes->get('contacto', 'Home::contacto');
$routes->post('consulta', 'usuario_contoller::add_consulta');

$routes->get('comercializacion', 'Home::comercializacion');

$routes->get('terminos', 'Home::terminos');

$routes->get('login', 'Home::login');

$routes->get('registro', 'Home::registro');
$routes->post('registro_usuario', 'usuario_contoller::add_registro');
