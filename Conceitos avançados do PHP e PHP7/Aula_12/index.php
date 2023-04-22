<?php
	$nome = "Guilherme";
	
	class teste
	{
		
		function __construct()
		{
			global $nome;
			echo $nome;
		}
	}
	new teste;
?>