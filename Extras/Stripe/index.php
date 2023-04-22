<!DOCTYPE html>
<html>
<head>	
	<title>Checkout Transparente</title>	
</head>
<body>
<?php
	$valor = 147;
	$valor = $valor*100;
?>

<form action="processar.php" method="POST">
	<input type="hidden" name="amount" value="<?php echo $valor; ?>">
	<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
	data-key="pk_test_a7X4MI3iuvAtPa29nd94hEHC"
	data-amount="<?php echo $valor; ?>"
	data-name="Demo Site"
	data-label="Pagar com cartão"
	data-currency="brl"
	data-panel-label="Pagar"
	data-description="Pagamento referente ao curso"
	data-image="teste.png"
	data-locale="auto">		
	</script>


</body>
</html>