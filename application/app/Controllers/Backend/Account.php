<?php
namespace App\Controllers\Backend;
use App\Controllers\BackendController;

class Account extends BackendController{
    public function index(){
        return $this->render('account', ['title' => 'account']);
    }
}