<?php
	testes();
	function testes(){
		static $i = 0;
		echo 'Olá chamando a função!';
		$i++;
		if($i < 3){
			testes();	
		}
		
	}

?>