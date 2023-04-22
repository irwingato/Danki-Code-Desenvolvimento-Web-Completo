<?php
	function teste(){
		return 9;
	}

	function teste2(?string $numero){
		return $numero;
	}

	$numero = teste2(10);

	var_dump($numero);
?>