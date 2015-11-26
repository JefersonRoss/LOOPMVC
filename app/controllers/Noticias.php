<?
	namespace Controllers;
	use Core;

	/**
	* 
	*/
	class Noticias extends Core\Controller{
		
		function __construct(){
			parent::__construct('Noticias');
		}

		public function index(){
			
			$data = $this->model->selectPosts();
			$this->view->render('noticias/index', $data);
		}

	}