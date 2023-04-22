<?php
	$login = 'guilherme';
	$senha = sha1('guilherme');

	if(isset($_POST['login'])){
		if($_POST['login'] == $login && sha1($_POST['senha']) == $senha){
			echo 'Logado com sucesso!';
		}else{
			echo 'Falhou a verificação!';
		}
	}
?>

<form method = "post">
	<input type="text" name="login">
	<input type="password" name="senha">
	<input type="submit" name="acao" value="Enviar!">
</form>