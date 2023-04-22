<?php
	session_start();
	setcookie('nome','Guilherme',time() - (60*60*24),'/');

	echo $_COOKIE['nome'];
?>