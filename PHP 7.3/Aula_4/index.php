<?php
	/*
	$arr = ['Guilherme','João'];

	list($a,$b) = $arr;

	$nome = 'Felipe';

	$a = &$nome;

	$a = 'joao';

	echo $nome;
	*/

	/*

	list(&$a,$b) = $arr;
	
	$a = 'novo nome';
	
	echo $arr[0];
	*/
	$arr = ['Guilherme','João'];
	$nome = &$arr[0];

	$nome = 'Fulano';

	echo $arr[0];
	
?>