<?php
	$pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados_&_php','root','AaZz$#!@1');

	$pdo->exec("LOCK TABLES `clientes` WRITE");

	sleep(10);
?>