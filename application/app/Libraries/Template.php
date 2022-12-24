<?php

namespace App\Libraries;
use CodeIgniter\View\View;
use Config\View as ConfigView;
use Jenssegers\Blade\Blade;

class Template {
    private $view = null;
    private $themePath = null;
    private $theme = null;
	private $blade = null;
    public function __construct()
    {
        $this->view = new View(new ConfigView());
    }
   

    public function render($view, $data = [],$themePath = ''){
		$enggine = env('TEMPLATE_ENGGINE') ?? false;
		if($enggine === "blade") {
			$blade = new Blade($themePath, $themePath . 'cache');
			return $blade->make($view, $data)->render();
		} else {
			$this->view->setViewPath($themePath);
			$this->view->setData($data);
			return $this->view->render($view);
			}
      
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