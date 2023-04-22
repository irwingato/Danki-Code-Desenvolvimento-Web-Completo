<?php
	
	class Filha{
		/*protected function funcaoTeste(){
			echo 'chamando funcao teste';
		}		
	}
	*/

	private function funcaoTeste(){
		echo 'chamando funcao teste';
	}

	public function mostrarOla(){
		$this->funcaoTeste();
		echo '<br />';
		echo 'Olá mundo';
	}
}

	class Pai extends Filha{

		public function mostrarOla(){
			parent::mostrarOla();
			echo '<br />';
			echo 'nova funcao!';
		}

		public function mostrarTchau(){
			echo 'Tchau Mundo!';
			echo '<br />';
			$this->funcaoTeste();
		}
	}

	//$psi = new Pai;

	//$pai->mostrarTchau();

	$pai = new Pai;

	//$pai->mostrarOla();

	//$pai->mostrarTchau();
	pai->mostrarOla();

	//$filha->mostrarOla();

?>