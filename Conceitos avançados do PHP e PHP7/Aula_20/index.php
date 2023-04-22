<?php
	$nome = "Guilherme";
	function teste(&$nome){
		$nome = "João";
	}

	teste($nome);
	echo $nome;
?>