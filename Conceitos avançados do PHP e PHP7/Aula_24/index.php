<?php
	
	class Classe1
	{
		
		public function index()
		{
			echo 'Chamando classe 1';
		}
	}
	class Class2
	{
		public function index(){
			echo 'chamando a classe 2';
		}

		public function callBack($func){
			$func();
		}
	}

	$class1 = new Classe1;
	$class2 = new Classe2;

	$class2->callBack(function() use ($class1){
		
	});

?>