<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

// Halaman Guest (Belum Login)
$routes->get('/', 'Page::index');
$routes->get('/program', 'Page::program');
$routes->get('/artikel', 'Page::artikel');
$routes->get('/tentang', 'Page::tentang');
$routes->get('/kontak', 'Page::kontak');

// Authentication
$routes->get('/login', 'Auth::login');
$routes->post('/auth/process', 'Auth::process');
$routes->get('/logout', 'Auth::logout');

// Halaman Admin (Memerlukan Login) - Dikelompokkan dengan filter
$routes->group('admin', ['filter' => 'auth'], static function ($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('program', 'Admin::program');
    $routes->get('artikel', 'Admin::artikel');
});
