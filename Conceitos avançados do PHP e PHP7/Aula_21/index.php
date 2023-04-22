<?php
	$nome = "Guilherme";

	$teste = &$nome;

	$teste = "João";
	$nome = "Felipe";

	echo $nome;

?>