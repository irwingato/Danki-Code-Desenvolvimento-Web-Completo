<?php

	$tokenHotmart = '9999999';

	//Substituir pelo post da hotmart
	$hotmartPost = '9999999';
	if(isset($hotmartPost)){
		if($tokenHotmart == $hotmartPost){
			//O POST É DA HOTMART!
			$email = 'gui_grillo13@hotmail.com';
			$status = 'approved';
			if($status == 'approved'){
				//Inserir no banco o acesso ao curso
				//No nosso caso está na tabela tb_admin_curso_controle
			}
		}
	}
?>