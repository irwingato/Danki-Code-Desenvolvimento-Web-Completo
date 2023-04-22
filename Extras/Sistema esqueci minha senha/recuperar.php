<?php

	session_start();
	if(isset($_POST['acao'])){
		//Existe o post para recuperação de senha!
		$token = uniqid();
		$_SESSION['email'] = $token;
		$_SESSION['token'] = $_POST['email'];
	}	
?>

	<h2>Você fez uma solicitação de nova senha!</h2>
	<p>Clique <a href="recuperar.php?token="<?php echo $token; ?>">aqui</a> para redefinir.</p>

<?php
	}else if($_GET['token']){
		$token = $_GET['token'];
	if($token != $_SESSION['token']){
		die("O token no parâmetro get não é válido!");
	}
	else{
		//Podemos redefinir a senha!
		echo '<h2>Redefinição de senha para e-mail:'.$_SESSION['email'].' </h2>';
		echo '<form method="post">
			<input type="email" name="email />
			<input type="password" name="password" />
			<input type="submit" name="redefinir" value="REDEFINIR!" />
		</form>';
	}
?>

<?php
	}
?>

<?php
	if(isset($_POST['redefinir'])){
		echo 'A SENHA FOI REDEFINIDA COM SUCESSO!';
	}
?>