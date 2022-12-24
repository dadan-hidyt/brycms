<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Web extends FrontEndController
{
    public function index()
    {
       $title = "Home - Website";
       return $this->render('index',compact('title'));
    }
}
