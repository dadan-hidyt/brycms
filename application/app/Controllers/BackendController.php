<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\HTTP\CLIRequest;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\TemplateConfig;
use Psr\Log\LoggerInterface;


abstract class BackendController extends BaseController
{
    protected $request;

    protected $helpers = [];

    public function render($view, $data = [])
    {
        $config = new TemplateConfig();
        $this->template->setThemePath($config->getBackendPath());
        return $this->template->render("{$view}", compact('data'),$config->getBackendPath());
    }
}
