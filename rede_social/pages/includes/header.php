<!DOCTYPE html>
<html>
<head>
	<title>Rede Social</title>
	<meta charset="viewport" content="width=device-width;initial-scale=1.0;maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/style.css">
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
<header>
	<div class="container">
		<div class="logo"><a href="<?php echo INCLUDE_PATH ?>">Rede Social</a></div>
		<div class="form-login">
			<form method="post">
				<input type="text" name="email" placeholder="E-mail...">
				<input type="password" name="senha" placeholder="Senha...">
				<input type="submit" name="login" value="Logar!">
			</form>
		</div><!--form-login-->
		<div class="clear"></div>
	</div><!--container-->
</header>