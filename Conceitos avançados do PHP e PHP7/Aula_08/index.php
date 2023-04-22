<?php
	/*
	$teste = "Guilherme";

	// if(preg_match('/lhe/', $teste){
	// echo 'Verdade!';
	//}

	preg_match('/(.*?)the(.*)/',$teste,$retorno);
	echo $retorno[2];
	*/
	function cpfValido($cpf){
		//000.000.000-00
		$expressao = '/[0-9]{3}\.[0-9]{3}\.[0-9]{3}-[0-9]{2}/';
		return preg_match($expressao, $cpf);
	}
	if(isset($_POST['acao'])){
		$cpf = $_POST['cpf'];

		if(cpfValido($cpf)){
			echo 'O cpf é válido';
		}else{
			echo 'O cpf não é válido';
		}
	}
?>

<form method="post">
	<input type="text" name="cpf">
	<input type="acao" name="submit" />
</form>