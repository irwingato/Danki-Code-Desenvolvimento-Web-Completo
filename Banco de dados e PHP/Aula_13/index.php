<?php
	$pdo = new PDO('mysql:host=localhost;dbname=testes','root','AaZz$#!@1');

	$select = $pdo->prepare("SELECT * FROM filmes WHERE categoria_id = (SELECT categoria_id FROM categorias WHERE nome = 'terror')");

	$select->execute();

	echo '<pre>';
	var_dump($select->fetchAll());
	echo '</pre>';
?>