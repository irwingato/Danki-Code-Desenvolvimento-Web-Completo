<?php
	class Teste
	{
		public function exemplo($par){
			if($par != 10){
				Throw new Exception('Ocorreu um erro!');
			}else{
				echo 'Sucesso!';
			}
		}
	}

	$teste = new Teste();

	try{
		$teste->exemplo(10);
	}catch(Exception $e){
		echo $e->getMessage();
	}
?>