<?php
	/*
	$date = DateTime::createFromFormat('d/m/Y','25/05/1993');
	echo $date->format('Y-m-d');
	*/

	date_default_timezone_set('America/Sao_Paulo');
	echo date('d/m/Y H:i:s',time()+60*60*24);
?>