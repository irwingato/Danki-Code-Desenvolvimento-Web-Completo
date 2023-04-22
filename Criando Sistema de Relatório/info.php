<?php
	$mysql = new PDO('mysql:host=localhost;dbname=relatorios','root','AaZz$#!@1');

	$info = $mysql->prepare("SELECT * FROM `tb_relatorio`");

	$info->execute();

	$info = $info->fetchAll();

	die(json_encode($info));
?>