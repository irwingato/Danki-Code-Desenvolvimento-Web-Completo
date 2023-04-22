<!DOCTYPE html>
<html>
<head>
	<title>Rede Social</title>
	<meta charset="viewport" content="width=device-width;initial-scale=1.0;maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link rel="stylesheet" href="<?php echo INCLUDE_PATH ?>estilo/style.css">	
</head>
<body>
<base base="<?php echo INCLUDE_PATH; ?>" />
<header style="padding: 0;">
	<div class="container">
		<div style="margin-top: 8px;" class="logo"><a href="<?php echo INCLUDE_PATH ?>">Rede Social</a></div>
		<div class="btn-opt-menu">
			<?php $solicitacoesPendentes = count(\controller\solicitacoesController::listarSolicitacoes()); ?>
			<a href="<?php echo INCLUDE_PATH ?>solicitacoes">Solicitações(<?php echo $solicitacoesPendentes ?>)</a>
			<a href="<?php echo INCLUDE_PATH ?>comunidade">Comunidade</a>
			<a href="<?php echo INCLUDE_PATH ?>me?sair"><i class="fa fa-times"></i> Sair!</a>			
		</div><!--form-login-->
		<div class="clear"></div>
	</div><!--container-->
</header>