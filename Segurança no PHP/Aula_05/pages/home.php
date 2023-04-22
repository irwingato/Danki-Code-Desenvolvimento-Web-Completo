<?php
	if(isset($logado)){
		echo 'Aqui é uma informação exclusiva apenas para quem logou no sistema!';
	}else{
		echo 'Arquivo protegido!';
	}
	
?>