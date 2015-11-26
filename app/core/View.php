<?
	namespace Core;

	/**
	* 
	*/
	class View{
		
		function __construct(){}

		public function render($name, $data = array()){
			require_once( DIR_VIEWS . 'header.php' );
			require_once( DIR_VIEWS . 'pages/' . $name . '.php');
			require_once( DIR_VIEWS . 'footer.php' );
		}
	}