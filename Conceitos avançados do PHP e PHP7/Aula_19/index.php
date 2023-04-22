<?php
	
	class Teste
	{
		
		public function sendMessage($n)
		{
			if($n instanceof Closure){
				$n = $n->bindTo($this);
				$n();
			}
		}

		public function algo(){
			echo 'Estou chamando algo!';
		}

		$teste =  new Teste;
		$teste->sendMessage(function(){
			$this->algo();
		});
	}

?>