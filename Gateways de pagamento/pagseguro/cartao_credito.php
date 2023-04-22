<?php
	ini_set('max_execution_time','0');

	if(isset($_POST['gerar_sessao'])){
		$url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/sessions?email=seuemail@email.com&token=19ED1418223F492C8F74C3362F55832F';
		$curl = curl_init($url);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

		$retorno = curl_exec($curl);
		curl_close($curl);
		$session = simplexml_load_string($retorno);
		die(json_encode($session));
	}else if(isset($_POST['fechar_pedido'])){
		$data = [
			'email'=>'gui_grillo13@hotmail.com',
			'token'=>'6C2A873D3E1D4AD38B69CBB113FE00E0',
			'paymentoMode'=>'default',
			'paymentMethod'=>'creditCard',
			'receiverEmail'=>'gui_grillo13@hotmail.com',
			'currency'=>'BRL',
			'extraAmount'=>'0.00',
			'itemId1'=>'1',
			'itemDescription1'=>'Camiseta',
			'itemAmount1'=>number_format($_POST['amount'],2,'.',''),
			'itemQuantity'=>'1',
			'notificationURL'=>'http://dankicode.com',
			'reference'=>uniqid(),
			'senderName'=>'Guilherme Grillo',
			'senderCPF'=>'09561166984',
			'senderAreaCode'=>'48',
			'senderPhone'=>'30242189',
			'senderEmail'=>'c81806156869060991684@sandbox.pagseguro.com.br',
			'senderHas'=>$_POST['hash'],
			'shippingAdressStreet'=>'Rua desembargador f. bastos',
			'shippingAddressNumber'=>'244',
			'shippingAddressComplement'=>'Casa 1',
			'shippingAddressDistrict'=>'Coqueiros',
			'shippingAddressPostalCode'=>'88080230',
			'shippingAddressCity'=>'florianópolis',
			'shippingAddressState'=>'SC',
			'shippingAddressCountry'=>'BRA',
			'shippingType'=>'3',
			'shippingCost'=>'0.00',
			'creditCardToken'=>$_POST['token'],
			'installmentQuantity'=>$_POST['parcelas'],
			'installmentValue'=>number_format($_POST['valorParcela'],2,'.',''),
			'noInterestInstallmentQuantity'=>4,
			'creditCardHolderName'=>'GUILHERME GRILLO',
			'creditCardHolderCPF'=>'09561166984',
			'creditCardHolderBirthDate'=>'25/05/1993',
			'creditCardHolderCPF'=>'09561166984',
			'creditCardHolderAreaCode'=>'48',
			'creditCardHolderPhone'=>'999013620',
			'billingAddressStreet'=>'Rua desembargador f. bastos',
			'billingAddressNumber'=>'244',
			'billingAddressComplement'=>'Casa 1',
			'billingAddressDistrict'=>'Coqueiros',
			'billingAddressPostalCode'=>'88080230',
			'billingAddressCity'=>'florianópolis',
			'billingAddressState'=>'´SC',
			'billingAddressCountry'=>'BRA'
		];
		$query = http_build_query($data);
		$url = 'https://ws.sandbox.pagseguro.uol.com.br/v2/transactions';
		$curl = curl_init($url);
		curl_setopt($curl,CURLOPT_HTTPHEADER,array('Content-Type: application/x-www-form-urlencoded;charset=UTF-8'));
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);		
	}

?>