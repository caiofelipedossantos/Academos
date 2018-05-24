<?php
require 'environment.php';

global $db;

$config = array();
if(ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/Academos/");
	$config['dbname'] = 'colegio';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
} else {
	define("BASE_URL", "http://caio.w3connect.com.br/Academos/");
	$config['dbname'] = 'caiow3co_academos';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'caiow3co_root';
	$config['dbpass'] = '#Caiofelipe1102';
}

$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>