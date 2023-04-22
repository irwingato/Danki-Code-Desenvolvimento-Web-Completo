<?php
	function executar($b,$a = "Guilherme"){
		if($b instanceof Closure)
			$b($a);
	}
		

	executar(function($nome){
		êcho 'Olá '.$nome;
	});
	

?>