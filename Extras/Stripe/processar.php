<?php
	require('vendor/autoload.php');

	$stripe = array(
			"secret_key" => "sk_test_rJD9z9Xjv0vSu1SLIgVUng5d",
			"publishable_key" => "pk_test_a7X4MI3iuvAtPa29nd94hEHC"
	);

	\Stripe\Stripe::setApiKey($stripe['secret_key']);

		$token = $_POST['stripeToken'];
		$email = $_POST['stripeEmail'];

		$customer = \Stripe\Customer::create(array(
			'email' => $email,
			'source' => $token
		));

		$charge = \Stripe\Charge::create(array(
			'customer' => $customed->id,
			'amount' => $_POST['amount'],
			'currency' => 'brl'
		));
	
	echo '<h1>Cobrança feita com sucesso!</h1>';
?>