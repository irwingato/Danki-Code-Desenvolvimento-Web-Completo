<?php
	session_start();
	if(isset($_SESSION['login'])){
		//Arquivo exclusivo apenas para solicitação ajax!
		$data['info'] = 'Informação exclusiva apenas para usuários logados';
		die(json_encode($data));
	}else{
		die("Arquivo protegido! Logue no sistema!");
	}
?>