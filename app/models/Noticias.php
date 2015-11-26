<?
	namespace Models;
	use Core;

	/**
	* 
	*/
	class Noticias extends Core\Model{
		
		protected $_table = 'tb_posts';

		public function selectPosts(){
			return $this->read();
		}

	}