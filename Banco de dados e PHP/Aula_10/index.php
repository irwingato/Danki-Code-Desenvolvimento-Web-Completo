<?php
	$pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados_&_php','root','AaZz$#!@1');

	$sql = $pdo->prepare("SELECT * FROM clientes WHERE nome LIKE '%g%'");

	$sql->execute();

	$clientes = $sql->fetchAll();

	print_r($clientes);
?>