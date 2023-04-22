<?php
	session_start();
	$_SESSION['nome'] = 'Gui';
	$_SESSION[0]['nome'] = 'Gui';
	session_destroy();	
?>