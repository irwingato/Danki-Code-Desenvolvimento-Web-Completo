<?php

	$pdo = new PDO('mysql:host=localhost;dbname=banco_de_dados_&_php','root','AaZz$#!@1');

	$id = 3;

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

	if($sql->execute(array($id))){
		echo 'Meu cliente foi atualizado com sucesso';
	}

?>