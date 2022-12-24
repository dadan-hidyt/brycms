<?php
use App\Controllers\BackendController;

namespace App\Controllers;
class PageNotFound extends BackendController{
    public function index(){
        echo "NOT FOUND";
    }
}