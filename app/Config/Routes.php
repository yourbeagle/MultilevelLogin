<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PageController::index');
$routes->get('/about', 'PageController::about');
$routes->get('/contact', 'PageController::contact');
$routes->get('/faqs', 'PageController::faqs');
$routes->get('/karyawan', 'Karyawan::index');
$routes->get('/homeAdmin', 'PageController::homeAdmin', ["filter" => "auth"]);
$routes->get('/homeDosen', 'PageController::homeDosen', ["filter" => "auth"]);
$routes->get('/homeMahasiswa', 'PageController::homeMahasiswa', ["filter" => "auth"]);
$routes->get('/siswa', 'Siswa::index');
$routes->get('/register', 'RegisterController::index');
$routes->post('/register/process', 'RegisterController::process');
$routes->get('/login', 'LoginController::index', ["filter" => "noauth"]);
$routes->post('/login/process', 'LoginController::process');
$routes->get('/logout', 'LoginController::logout');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
