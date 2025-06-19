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
$routes->post('registro_usuario', 'usuario_contoller::add_registro');

$routes->get('user_admin', 'usuario_contoller::admin');
$routes->get('agregar', 'productos_controller::form_agregar_producto');
$routes->post('insertar_producto', 'productos_controller::registrar_producto');
$routes->get('gestionar', 'productos_controller::gestionar_productos');

$routes->get('editar/(:num)', 'Productos_controller::editar_productos/$1');

$routes->post('actualizar', 'Productos_controller::actualizar_producto');
$routes->get('eliminar/(:num)', 'Productos_controller::eliminar_producto/$1');
$routes->get('activar/(:num)', 'Productos_controller::activar_producto/$1');

$routes->get('agregar_productos', 'Home::agregarProductos');
$routes->get('ver_consultas', 'Home::verConsultas');
$routes->get('gestionar_inventario', 'Home::gestionarInventario');
$routes->get('ver_carrito', 'Carrito_controller::ver_carrito');

$routes->get('ver_catalogo', 'productos_controller::listar_productos');


$routes->get('ver_carrito', 'Carrito_controller::ver_carrito');
$routes->post('add_cart', 'Carrito_controller::agregar_carrito');
$routes->get('eliminar_item/(:any)', 'Carrito_controller::borrar/$1');
$routes->get('vaciar_carrito/(:any)', 'Carrito_controller::vaciar/$1');

$routes->get('genero/(:num)', 'Productos_controller::listar_productos_por_genero/$1');
$routes->get('categoria/(:num)', 'Productos_controller::listar_productos_por_categoria/$1');

$routes->get('ventas', 'Carrito_controller::guardar_venta');

$routes->get('consultasAdm', 'Usuario_contoller::listar');
$routes->get('leer/(:num)', 'Usuario_contoller::leer_mensaje/$1');
$routes->get('noLeer/(:num)', 'Usuario_contoller::noLeido_mensaje/$1');

$routes->get('lista-venta', 'Carrito_controller::listar_ventas');
$routes->get('ver-detalles/(:num)', 'Carrito_controller::listar_ventas_detalles/$1');

$routes->get('lista-venta-cliente', 'Carrito_controller::listar_ventas_cliente');

$routes->get('usuario', 'Home::verUsuario');
$routes->get('usuario/ver_usuario', 'Usuario_contoller::ver_usuario');
$routes->get('usuario/ver_usuario/(:num)', 'Usuario_contoller::ver_usuario/$1');
$routes->post('usuario/actualizar_usuario', 'Usuario_contoller::actualizar_usuario');




