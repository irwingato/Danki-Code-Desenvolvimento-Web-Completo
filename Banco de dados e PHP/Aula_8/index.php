<?php
	define('HOST','localhost');
	define('DB','banco_de_dados_&_php');
	define('USER', 'root');
	define('PASS','AaZz$#!@1');
	
	try{
		$pdo = new PDO('mysql:host='.HOST.';dbname='.DB,USER,PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
		$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			echo '<h1>erro ao conectar</h1>';
		}	
?>