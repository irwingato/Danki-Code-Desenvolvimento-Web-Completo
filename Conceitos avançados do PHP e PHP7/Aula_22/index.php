<?php
	$nome = "Guilherme";
	$mensagem = 'Olá '.(1 == 1 ? $nome : 'Visitante');
	echo $mensagem;
	$postRequest = (isset($_POST['algo'] ? $_POST['algo'] : 'Não existe post');
	echo $postRequest;
?>