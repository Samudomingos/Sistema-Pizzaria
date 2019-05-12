<?php  
session_start();
require_once 'config.php';

spl_autoload_register(function($class){

	if(file_exists('controllers'.DIRECTORY_SEPARATOR.$class.'.php')){
		
		require 'controllers'.DIRECTORY_SEPARATOR.$class.'.php';
	
	} else if(file_exists('models'.DIRECTORY_SEPARATOR.$class.'.php')){

		require 'models'.DIRECTORY_SEPARATOR.$class.'.php';

	}else if(file_exists('core'.DIRECTORY_SEPARATOR.$class.'.php')){

		require 'core'.DIRECTORY_SEPARATOR.$class.'.php';

	}

});

$core = new Core();
$core->run();

?>