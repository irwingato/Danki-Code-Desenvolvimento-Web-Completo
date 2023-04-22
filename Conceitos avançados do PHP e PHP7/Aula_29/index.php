<?php
	date_default_timezone_set('America/Sao_Paulo');
	$variavel = 'Guilherme';
	if($variavel == 'Guilherme'){
		echo 'Registrado no arquivo de log';
		error_log(date('d/m/Y H:i:s'). ' Não é isso que eu quero!'."\n",3,'meuarquivosecreto');
	}
?>