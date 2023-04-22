<?php
	$pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados_&_php','root','AaZz$#!@1');

	$sql = $pdo->prepare("SELECT * FROM clientes WHERE date BETWEEN '2017-01-01' AND '2017-12-01'");

	$sql->execute();

	$clientes = $sql->fetchAll();

	print_r($clientes);
?>