<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/home', 'Home::index');
$routes->get('/produk', 'ProdukController::index');
$routes->get('/keranjang', 'TransaksiController::index');