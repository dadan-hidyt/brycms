<?php

namespace App\Libraries;
use CodeIgniter\View\View;
use Config\View as ConfigView;
class Template {
    private $view = null;
    private $themePath = null;
    private $theme = null;
    public function __construct()
    {
        $this->view = new View(new ConfigView());
    }
   

    public function render($view, $data = [],$themePath = ''){
        $this->view->setViewPath($themePath);
        $this->view->setData($data);
        return $this->view->render($view);
    }

	/**
	 * @param mixed $themePath 
	 * @return self
	 */
	public function setThemePath($themePath): self {
		$this->themePath = $themePath;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getThemePath() {
		return $this->themePath;
	}
}
?>