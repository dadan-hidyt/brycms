<?php

$adminUri = 'adminweb';

$routes->group($adminUri, function ($routes) {
    //admin page
    $routes->get('/', function () {
        return redirect()->route('backend_index');
    });
    $routes->get('welcome', "Backend\Home::index", ['as' => 'backend_index']);
    $routes->group('akun', function ($routes) {
        $routes->get('/', "Backend\Account::index", ['as' => 'backend_account_index']);
        $routes->get('setting', "Backend\Account::index", ['as' => 'backend_account_setting']);
    });
    $routes->set404Override(function () {
        return view('welcome_message');
    });
});