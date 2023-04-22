<?php 
	define('INCLUDE_PATH','http://localhost/Desenvolvimento Web Completo/Criando Site e Sistema de Fórum');
	define('HOST','localhost');
	define('USER','root');
	define('PASS','AaZz$#!@1');
	define('DB','forum');
	
	$autoload = function($class){
		include('classes/'.$class.'.php');
	};
	spl_autoload_register($autoload);
?>