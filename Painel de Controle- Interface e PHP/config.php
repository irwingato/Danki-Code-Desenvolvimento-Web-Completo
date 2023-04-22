<?php

	session_start();
	$autoload = function($class){
		if($class == 'Email'){
			require_once('classes/phpmailer/PHPMailerAutoload.php');
		}
		include('classes/'.$class.'.php');
	};

	spl_autoload_register($autoload);

	define('INCLUDE_PATH','http://localhost/Desenvolvimento Web Completo/Painel de Controle- Interface e PHP/');
	define('INCLUDE_PATH_PAINEL',INCLUDE_PATH.'painel/');
	//Conectar com banco de dados!
	define('HOST','localhost');
	define('USER', 'root');
	define('PASSWORD', 'AaZz$#!@1');
	define('DATABASE','projeto_01');
	

	//Funções
	function pegaCargo($cargo){
		$arr = [
		'0' => 'Normal',
		'1' => 'Sub Administrador',
		'2' => 'Administrador'];

		return $arr[$cargo];
	}
?>