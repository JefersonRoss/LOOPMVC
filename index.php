<?
	include_once( 'app/config.php' );
	spl_autoload_register(function($class){
		require_once( ROOT . $class . '.php' );
	});

	$app = new Core\Bootstrap;
	$app->init();
