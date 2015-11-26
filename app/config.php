<?
	#definições da aplicação
	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', __DIR__ . DS );
	define('BASE', 'http://'. $_SERVER['SERVER_NAME'] .'/loopmvc/');

	define('MODE', 'DEVELOPMENT');
	

	#configs do aplicação
	define('TITLE', 'LOOPMVC');
	

	#configs de diretorios
	define('DIR_VIEWS', ROOT . 'views/');
	define('DIR_PUBLIC', '../public/');


	#opções de erros
  	date_default_timezone_set("Brazil/East");

	switch (MODE) {
		case 'DEVELOPMENT':
			ini_set('display_errors', 'On');
			break;
		case 'PRODUCTION':
			ini_set('display_errors', 'Off');
			break;
	}

	ini_set('error_reporting', -1);
	ini_set('log_errors', 'On');
	ini_set('error_log', ROOT . 'error.log');


	#configurações do banco de dados
	define('DB_TYPE', 'mysql');
	define('DB_HOST', 'localhost');
	define('DB_NAME', 'mvc');
	define('DB_USER', 'root');
	define('DB_PASS', '');