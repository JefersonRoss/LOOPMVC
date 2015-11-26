<?
	namespace Core;
	use Models;

	/**
	* 
	*/
	class Controller{
		
		function __construct($name){
			$this->view = new View;

			$path = ROOT . 'models/' . $name . '.php';
			if (file_exists($path)) {
				$nameModel = 'Models\\' . $name;
				$this->model = new $nameModel;
			}
		}
	}