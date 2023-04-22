<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=devweb','root','');
		//Modo de desenvolvimento
		$pdo->setAttribute(PDO::ATTR_ERRRMODE,PDO::ERRMODE_EXCEPTION);
		//Modo de produção.
		//Não colocar nada
	}catch(Exception $e){
		//echo $e->getMessage();
		echo 'Não foi possível conectar! Tente novamente mais tarde!';
	}
?>