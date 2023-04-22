<?php
	if(isset($_SESSION['login'])){
		header('Location: '.INCLUDE_PATH.'home');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Logar no sistema</title>
	<style type="text/css">
	*{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
	}
		form{
			max-width: 800px;
			padding: 10px;
			width: 100%;
			background: 2px solid rgb(230,230,230);
			border-radius: 10px;
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%,-50%);
		}

		input[type=text],
		input[type=password]{
			width: 100%;
			height: 40px;
			margin-bottom: 15px;
			border: 1px solid #ccc;
			padding-left: 15px;
		}

		input[type=submit]{
			width: 70%;
			height: 30px;
			border-radius: 20px;
			background: #e82975;
			color: white;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_POST['acao'])){
			if(Usuarios::verificarLogin($_POST['login'],$_POST['senha'])){
				$getId = Usuarios::getUserId($_POST['login']);
				Usuarios::startSession($_POST['login'],$getId);
				header('Location: '.INCLUDE_PATH.'home');
			}else{
				echo '<script>alert("Usuário inválido!")</script>';
				//header('Location: '.INCLUDE_PATH.'login');
			}
		}
	?>
	<form method="post">
	<h2>Login:</h2>
	<br />
	<input type="text" name="login">
	<input type="password" name="senha">
	<input type="submit" name="acao" value="Logar!">
</body>
</html>