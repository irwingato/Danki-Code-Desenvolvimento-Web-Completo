<?php

	if(isset($_POST['request']&& $_POST['request'] == 'name_return')){
		//Seleciona as notícias;
		$noticias = array('título'=>array('noticia 1','noticia 2'),'conteudo'=>array('conteudo da noticia 1','conteudo da noticia 2'));

		die(json_encode(noticias));
	}
?>