<?php
	if(isset($_COOKIE['lembrar'])){
		$user = $_COOKIE['user'];
		$password = $_COOKIE['password'];
		$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin_usuarios` WHERE user = ? AND password = ?");
		$sql->execute(array($user,$password));
		if($sql->rowCount() == 1){
				$info = $sql->fetch();
				$_SESSION['login'] = true;
				$_SESSION['user'] = $user;
				$_SESSION['password'] = $password;
				$_SESSION['cargo'] = $info['cargo'];
				$_SESSION['nome'] = $info['nome']; 
				$_SESSION['img'] = $info['img'];
				Painel::redirect(INCLUDE_PATH_PAINEL);
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
	<link href="<?php echo INCLUDE_PATH_PAINEL ?>css/style.css" rel="stylesheet" />
	<title>Painel de Controle</title>
</head>
<body>

	<div class="box-login">
		<?php 
			if(isset($_POST['acao'])){
				$user = $_POST['user'];
				$password = $_POST['password'];
				$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin_usuarios` WHERE user = ? AND password = ?");
				$sql->execute(array($user,$password));
				if($sql->rowCount() == 1){
					$info = $sql->fetch();
					//Logamos com sucesso
					$_SESSION['login'] = true;
					$_SESSION['user'] = $user;
					$_SESSION['password'] = $password;
					$_SESSION['cargo'] = $info['cargo'];
					$_SESSION['nome'] = $info['nome'];
					$_SESSION['img'] = $info['img'];
					if(isset($_POST['lembrar'])){
						setcookie('lembrar',true,time()+(60*60*24),'/');
						setcookie('user',$user,time()+(60*60*24),'/');
						setcookie('password',$password,time()+(60*60*24),'/');
					}
					Painel::redirect(INCLUDE_PATH_PAINEL);
					die();
				}else{
					//Falhou
					echo '<div class="erro-box"><i class="fa fa-times"></i> Usuário ou senha incorretos!</div>';
				}
			}
		?>
		<h2>Efetue o login:</h2>
		<form method="post">
			<input type="text" name="user" placeholder="Login..." required>
			<input type="password" name="password" placeholder="Senha..." required>
			<div class="form-group-login left">
				<input type="submit" name="acao" value="Logar!">
			</div>
			<div class="form-group-login right">
				<label>Lembrar-me</label>
				<input type="checkbox" name="lembrar" />				
			</div>
			<div class="clear"></div>
		</form>
	</div><!--box-login-->

</body>
</html>