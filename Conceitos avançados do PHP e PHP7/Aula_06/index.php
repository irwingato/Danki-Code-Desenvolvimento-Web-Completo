<?php

// $func = function($nome){
	//echo $nome;	
//};

$func = '';

// $func('Guilherme');

	function one(){
		$func = fucntion(){
			echo 'Olá mundo';
		};

		$func();
	}

	$funcao = 'one';
	//call_user_func($funcao);

	if(is_callable($func)){
		echo 'Olá mundo';
	}
	
?>