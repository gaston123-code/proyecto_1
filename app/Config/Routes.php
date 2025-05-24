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
$routes->post('login_cliente', 'usuario_contoller::buscar_usuario');

$routes->get('logout', 'usuario_contoller::cerrar_sesion');

$routes->get('registro', 'Home::registro');
$routes->post('registro_usuario', 'Usuario_contoller::add_registro');

$routes->get('inicio_admin', 'usuario_contoller::admin');

$routes->get('productos', 'usuario_contoller::admin');