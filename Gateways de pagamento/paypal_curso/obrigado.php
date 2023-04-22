<?php
	require('vendor/autoload.php');

	$api = new \PayPal\Rest\ApiContext(
        	new \PayPal\Auth\OAuthTokenCredential('ATa-AvdNumCYnGznLobUa0FIs64e7tCr6iZKpUt3ZoBWcBY8QME3HoYNDg7mMSSz8eStrOackHXLaidO','EOj5zT14UIiwCHkcMMiSpM71Mc35DXa0yyVPQ_JldLA_osNq-yoIRqvFndEFCihVcQQY4_WeHkaZP225'
        	)
		);

	$paymentId = $_GET['paymentId'];

	$payment = \PayPal\Api\Payment::get($paymentId,$api);

	$execute = new \PayPal\Api\PaymentExecution();

	$execute->setPayerId($_GET['PayerID']);

	try {
		$result = $payment->execute($execute, $api);
		try {
			$payment = \PayPal\Api\Payment::get($paymentId, $api);
			$status = $payment->getState();

			if($status == 'approved'){
				//Pagamento aprovado
				echo 'Pagamento aprovado.';
				$info = current($payment->getTransactions());
				$info = $info->toArray();
				$referencia = $info['invoice_number'];
				echo '<br>';
				echo 'Minha referência: '.$referencia;
			}else{
				//Não aprovado.
			}

		} catch (Exception $e) {
			echo $e->getMessage();
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}
?>