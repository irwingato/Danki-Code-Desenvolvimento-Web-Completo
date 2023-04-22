<?php
	try{
		$pdo = new PDO('mysql:host=localhost;dbname=devweb','root','');
		//Modo de desenvolvimento
		$pdo->setAttribute(PDO::ATTR_ERRRMODE,PDO::ERRMODE_EXCEPTION);
		//Modo de produção.
		//Não colocar nada
	}catch(Exception $e){
		//echo $e->getMessage();
		echo 'Não foi possível conectar! Tente novamente mais tarde!';
	}

	if(isset($_POST['login'])){
		$login = $_POST['login'];
		$senha = $_POST['senha'];

		$sql = $pdo->prepare("SELECT * FROM `usuarios` WHERE login = ? AND senha = ?");
		$sql->execute(array($login,$senha));
		if($sql->rowCount() == 1){
			echo 'Logado!';
		}else{
			echo 'Falhou o login!';
		}
	}
?>

<form method = "post">
	<input type="text" name="login">
	<input type="password" name="senha">
	<input type="submit" name="acao" value="Enviar!">
</form>

