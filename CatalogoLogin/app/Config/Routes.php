<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Rutas para Login (públicas)
$routes->get('login', 'Login::index');
$routes->post('login/validar', 'Login::validar');
$routes->get('login/logout', 'Login::logout');

// Rutas protegidas, accesibles solo si el usuario está logueado
$routes->group('', ['filter' => 'auth'], function($routes) {
    // Ruta protegida después del login
    $routes->get('bienvenido', 'Bienvenido::index');

    // Rutas para Zapatos con variable subcategoría protegidas por filtro 'auth'
    $routes->get('zapatos/(:num)', 'ControladorZapatos::index/$1');

    // Rutas para Vestidos con variable subcategoría protegidas por filtro 'auth'
    $routes->get('vestidos/(:num)', 'ControladorVestido::index/$1');

    // Rutas para Carteras con variable subcategoría protegidas por filtro 'auth'
    $routes->get('carteras/(:num)', 'ControladorCartera::index/$1');
});
