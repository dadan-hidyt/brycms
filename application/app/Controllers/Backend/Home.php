<?php
namespace App\Controllers\Backend;

use App\Controllers\BackendController;

class Home extends BackendController{
    function index(){
        return $this->render('home');
    }
}