<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\TemplateConfig;
use Psr\Log\LoggerInterface;


abstract class FrontEndController extends BaseController
{
    protected $request;

    protected $helpers = [];
    
    public function render($view,$data = []){
        $theme = env('DEFAULT_THEME') ?? '';
        $from_db = '';
        if (!empty($from_db)){
            $theme = $from_db;
        }
        $config = new TemplateConfig();
        $theme_file = $config->getFrontendPath().$theme.DIRECTORY_SEPARATOR.$view.'.php';
        if(!file_exists($theme_file)){
            die("Theme <b>{$theme}</b> Not Registery | Requested file: {$theme_file}");
        }
        return $this->template->render("{$view}", compact('data'),$config->getFrontendPath().$theme.DIRECTORY_SEPARATOR);
    }
}
