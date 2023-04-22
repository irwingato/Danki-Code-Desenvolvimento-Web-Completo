<?php
	$nome = "Guilherme";
	$nome2 = "João";

	$teste = function() use($nome,$nome2){
		echo $nome2;
	};

	teste();
?>