<?
	namespace Core;
	use Controllers\Error as Error;
	use \PDO as PDO;
	
	/**
	* 
	*/
	class Model {

		protected $db;
		protected $_table;
		
		function __construct(){

			if (!isset($this->db)) {
				try {
					$dsn = DB_TYPE .':host=' . DB_HOST . ';dbname=' . DB_NAME .';charset=utf8';
					$this->db = new PDO($dsn, DB_USER, DB_PASS);
					$this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
				} catch (PDOException $e) {
					error_log($e->getMessage());
		            die();
				}

			}else{
				return $this->db;
			}
		}

		public function create(){
			#logica de criar
		}

		public function read(){
			$sql = 'SELECT * FROM ' . $this->_table;
			$stmt = $this->db->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function update(){
			#logica de alterar
		}

		public function delete(){
			#logica de excluir
		}
	}