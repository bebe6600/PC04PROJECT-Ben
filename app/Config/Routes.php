<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

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
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->post('/contact_submit', 'Home::contact_submit');
$routes->get('/contact_thanks', 'Home::contact_thanks');

$routes->get('/productList', 'product::productList');
$routes->get('/product/(:num)', 'product::product/$1');


$routes->get('/cart','product::cart');
$routes->get('/checkout_address', 'checkout::checkout_address');
$routes->post('/checkout_submit', 'checkout::checkout_submit');

// $routes->get('/checkout_shipping', 'Frontend::checkout_shipping');
// $routes->get('/checkout_payment', 'Frontend::checkout_payment');
// $routes->get('/checkout_review', 'Frontend::checkout_review');
$routes->get('/checkout_complete', 'checkout::checkout_complete');

$routes->post('/api/addCart', 'Api::addCart');
$routes->get('/api/getCart/(:any)', 'Api::getCart/$1');

$routes->get('/signup_login', 'user::signup_login');
$routes->post('/signup_submit', 'user::signup_submit');
$routes->post('/login_submit', 'user::login_submit');
$routes->get('/signup_thanks', 'user::signup_thanks');
$routes->get('/logout', 'user::logout');


$routes->get('/dashboard', 'Backend::index');
$routes->get('/product_manage', 'Backend::product_manage');
$routes->get('/product_add', 'Backend::product_add');
$routes->post('/product_insert', 'Backend::product_insert');
$routes->get('/product_edit/(:num)', 'Backend::product_edit/$1');
$routes->get('/product_del/(:num)', 'Backend::product_del/$1');
$routes->post('/product_update', 'Backend::product_update');


//user
$routes->get('/user_manage', 'Backend::user_manage');
$routes->get('/user_add', 'Backend::user_add');
$routes->post('/user_insert', 'Backend::user_insert');
$routes->get('/user_edit/(:num)', 'Backend::user_edit/$1');
$routes->get('/user_del/(:num)', 'Backend::user_del/$1');
$routes->post('/user_update', 'Backend::user_update');



// so
$routes->get('/so_manage', 'Backend::so_manage');
$routes->get('/so_add', 'Backend::so_add');
$routes->post('/so_insert', 'Backend::so_insert');
$routes->get('/so_edit/(:num)', 'Backend::so_edit/$1');
$routes->get('/so_del/(:num)', 'Backend::so_del/$1');
$routes->post('/so_update', 'Backend::so_update');







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
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
