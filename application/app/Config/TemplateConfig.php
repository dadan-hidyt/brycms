<?php
namespace Config;
use CodeIgniter\Config\BaseConfig;
class TemplateConfig extends Paths{
    private $backendPath = null;
	private $frontendPath = null;
    public function __construct()
    {
        $this->setBackendPath($this->viewDirectory . DIRECTORY_SEPARATOR . 'backend'.DIRECTORY_SEPARATOR);
		$this->setFrontendPath($this->viewDirectory . DIRECTORY_SEPARATOR . 'frontend' . DIRECTORY_SEPARATOR);

    }
	/**
	 * @return mixed
	 */
	public function getBackendPath() {
		return $this->backendPath;
	}
	
	/**
	 * @param mixed $backendPath 
	 * @return self
	 */
	public function setBackendPath($backendPath): self {
		$this->backendPath = $backendPath;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getFrontendPath() {
		return $this->frontendPath;
	}
	
	/**
	 * @param mixed $frontendPath 
	 * @return self
	 */
	public function setFrontendPath($frontendPath): self {
		$this->frontendPath = $frontendPath;
		return $this;
	}
}