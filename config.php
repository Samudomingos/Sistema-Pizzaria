<?php  

require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development'){
	define('BASE_URL',"http://localhost/Projetos/Sistemas/Pizzaria/");
	$config['dbname'] = 'pizzaria';
	$config['host'] = 'localhost';
	$config['dbpass'] = "";
	$config['dbuser']="root";

} else{
	define('BASE_URL',"http://meusite.com.br/");
	$config['dbname'] = 'pizzaria';
	$config['host'] = 'localhost';
	$config['dbpass'] = "";
	$config['dbuser']="root";
	
}

global $conn;

try {

	$conn = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
	


} catch (PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}



?>