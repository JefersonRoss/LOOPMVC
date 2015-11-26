<?
	namespace Controllers;
	use Core;

	/**
	* 
	*/
	class Error extends Core\Controller{
		
		function __construct(){
			parent::__construct('error');
		}

		public function index(){
			$this->view->render('error');
		}
	}