<?php
	
	//Durma o código por x segundos.
	/*
	sleep(3);

	echo 'um';

	sleep(3);

	echo 'dois';

	sleep(3);

	echo 'tres';
	*/

	$nome = 'Guilherme';

	if($nome == 'João'){
		//Continuamos o código
		echo 'Tudo certo';
	}else{
		die('O script parou de ser executado');
	}

	sleep(3);

	echo 'um';

	sleep(3);

	echo 'dois';

	sleep(3);

	echo 'tres';
?>