<?php

	$pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados_&_php','root','AaZz$#!@1');

	$id = 3;

	//OR funcion como `ou`
	//AND funciona como `e`

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='João', sobrenome='Pereira' WHERE nome='Mario' OR
		nome='Guilherme' ");

	if($sql->execute()){
		echo 'Meu cliente foi atualizado com sucesso';
	}

?>