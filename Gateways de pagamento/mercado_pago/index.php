<?php
	require('vendor/autoload.php');

	$mp = new MP('4842619708361379','NDrULCE7JyfZ4onvhkALvluuwweCzsI');

	$data = array(
			'items'=>array(),
			'shipments'=> array(
				'mode'=>'custom',
				'cost'=>20.00,
				'receiver_address'=>array(
					'zip-code'=>'88080-230'
				)
			),
			'back_urls'=>array(
				'sucess'=>'http://localhost/mercado_pago/obrigado.php',
				'pending'=>'http://localhost/mercado_pago/pendente.php',
				'failure'=>'http://localhost/mercado_pago/falhou.php',
			),
			'notification_url'=>'http://localhost/mercado_pago/notificacao.php',
			'auto_return'=>'approved',
			'external_reference'=>uniqid()
		);

	$data['items'][0] = array(
		'title'=>'Sapato',
		'quantity'=>1,
		'currency_id'=>'BRL',
		'unit_price'=>200.00
	);

	$link = $mp->create_preference($data);
	header('Location: '.$link['response']['init_point']);
	die();	
?>