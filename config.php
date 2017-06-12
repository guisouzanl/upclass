<?php
require 'environment.php';

// se mudar de pasta é só mudar aqui
define("BASE", "http://projetox.pc/upclass/");

global $config;
$config = array();
if(ENVIRONMENT == "development")
{
	$config['dbname'] = 'upclass';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
else
{
	$config['dbname'] = 'galeria';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}




?>