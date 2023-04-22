<?php
	session_start();
	require('deliveryController.php');
	require('deliveryModel.php');

	define('INCLUDE_PATH','http://localhost/Desenvolvimento Web Completo/Criando Sistema de Delivery/');

	$deliveryController = new deliveryController();

	$deliveryController->index();

?>