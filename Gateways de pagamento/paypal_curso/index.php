<?php 
	require('vendor/autoload.php');

	$api = new \PayPal\Rest\ApiContext(
        	new \PayPal\Auth\OAuthTokenCredential('ATa-AvdNumCYnGznLobUa0FIs64e7tCr6iZKpUt3ZoBWcBY8QME3HoYNDg7mMSSz8eStrOackHXLaidO','EOj5zT14UIiwCHkcMMiSpM71Mc35DXa0yyVPQ_JldLA_osNq-yoIRqvFndEFCihVcQQY4_WeHkaZP225'
        	)
		);

	$payer = new \PayPal\Api\Payer();
	$payer->setPaymentMethod('paypal');

	$amount = new \PayPal\Api\Amount();
	$amount->setCurrency('BRL')->setTotal('200.00');

	$transaction = new \PayPal\Api\Transaction();

	$transaction->setAmount($amount);

	//Gerar ID único
	$transaction->setInvoiceNumber(time());

	$redirectUrls = new \PayPal\Api\RedirectUrls();

	$redirectUrls->setReturnUrl('http://localhost/paypal_curso/obrigado.php');
	$redirectUrls->setCancelUrl('http://localhost/paypal_curso/cancelar.php');

	$payment = new \PayPal\Api\Payment();
	$payment->setIntent('sale')
    ->setPayer($payer)
    ->setTransactions(array($transaction))
    ->setRedirectUrls($redirectUrls);
 	
 	try {
    	$payment->create($api);
    	echo $payment;
    	header('Location: '.$payment->getApprovalLink());

	}
	catch (\PayPal\Exception\PayPalConnectionException $ex) {
	    echo $ex->getData();
	}
?>