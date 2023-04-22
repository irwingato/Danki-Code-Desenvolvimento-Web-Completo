<?php
	//file_get_contents('nomedoarquivo');
	//file_put_contents('nomedoarquivo','conteúdo');

	/*
		manipulação de pastas
	*/
	//mkdir('pasta');
	/*
	if(is_dir('request.php')){
		echo 'é uma pasta válida';
	}else{
		echo 'não existe ou não é uma pasta';
	}
	*/
	//deletar a pasta
	//rmdir('pasta');
	if ($handle = opendir('pasta')) {


    /* Esta é a forma correta de varrer o diretório */
    while ($file = readdir($handle)) {
    	if($file == '.' || $file == '..'){
    		continue;
    	}
    	/*
    	if(is_dir('pasta/'.$file) == false){
    		// é um arquivo
    	}else{
    		//uma pasta
    	}
    	*/
        echo "$file\n";
        echo '<br />';
    }

    closedir($handle);
}
?>