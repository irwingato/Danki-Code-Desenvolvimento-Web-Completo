<?php

	//Array single
	$arr = ['Guilherme','João'];
	$arr = array('guilherme','Chave2'=>'João');

	$arr[0] = 'Guilherme';
	$arr[] = 'João';

	//Arrays Multidimensionais

	//$arr2 = array(array('Guilherme','João'),array(23,45));

	//$arr2[0] = array('chave1'=>'Guilherme','João');

	$arr2[0]['chave1'] = 'Guilherme';

	echo $arr2[0]['chave1'];

?>