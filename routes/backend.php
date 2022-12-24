<?php

$adminUri = 'administrator';

$routes->group($adminUri, function ($routes) {
  
    $routes->get('/', function () {
        return redirect()->route('backend_index');
    });
    /** ROUTES LOGIN */
    $routes->get('login', function () {
        echo "Login";
    }, ['as' => 'backend_login']);
    /** ROUTE ADMIN */
    $routes->get('utama', "Backend\Home::index", ['as' => 'backend_index']);
    $routes->group('akun', function ($routes) {
        $routes->get('/', "Backend\Account::index", ['as' => 'backend_akun_index']);
        $routes->get('setting', "Backend\Account::index", ['as' => 'backend_akun_setting']);
    });
});