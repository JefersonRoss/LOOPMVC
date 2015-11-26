<?
	namespace Core;
	use Controllers;

	/**
	* 
	*/
	class Bootstrap{

		private $url;
		private $controller;
		private $method;
		private $params;
		
		function __construct(){}

		private function getUrl(){
			$this->url = isset($_GET['url']) ? $_GET['url'] : 'home';
			$this->url = rtrim($this->url, '/');
			$this->url = filter_var($this->url, FILTER_SANITIZE_URL);
			$this->url = explode('/', $this->url);
			return $this->url;
		}

		private function getController(){
			$path = ROOT . 'controllers/' . $this->url[0] . '.php';
			if(file_exists($path)){
				$ctrl = 'Controllers\\' . $this->url[0];
				return $this->controller = new $ctrl;
			}else{
				return $this->error();
			}
		}

		private function getMethod(){
			$this->method = isset($this->url[1]) ? $this->url[1] : 'index';
			if (method_exists($this->controller, $this->method)) {
				return $this->controller->{$this->method}();
			}else{
				return $this->error();
			}
		}

		private function error(){
			$this->controller = new Controllers\Error;
			$this->controller->index();
		}

		public function init(){
			$this->getUrl();
			$this->getController();
			$this->getMethod();
		}

	}