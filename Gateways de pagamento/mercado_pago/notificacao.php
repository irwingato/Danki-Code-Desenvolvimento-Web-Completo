<?php
	require('vendor/autoload.php');

	$mp = new MP('4842619708361379','NDrULCE7JyfZ4onvhkALvluuwweCzsI');

	$mp->sandbox_mode(false);

	$info = $mp->get_payment_info($_GET['id']);

	if($info['status'] == 200){
		$ref = $info['response']['collection']['external_reference'];
		$status = $info['response']['collection']['status'];
		if($status == 'approved'){
			//Pagamento aprovado!
			//Apenas atualizar no banco de dados!
		}
	}
?>