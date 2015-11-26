<?
	namespace Controllers;
	use Core;

	/**
	* 
	*/
	class Home extends Core\Controller{
		
		function __construct(){
			parent::__construct('home');
		}

		public function index(){
			$this->view->render('home/index');
		}

	}