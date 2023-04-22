<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Motor de busca</title>
</head>
<body>

<?php
	if(isset($_POST['q'])){
		$q = urlencode($_POST['q']);
		$handle = curl_init();

	$url = 'https://www.googleapis.com/customsearch/v1?key=AIzaSyDHPNQxozOzQSZ-djvWGOBUsHkBUoT_qH4&cx=005621842107047140160:utogtkpe13a&q='.$q;

	//Set the url
	curl_setopt($handle, CURLOPT_URL, $url);
	// Set the result output to be string.
	curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
	$output = curl_exec($handle);

	curl_close($handle);

	$resultado = json_decode($output);

	for($i = 0; $i < count($resultado->items);$i++){
		echo '<a href="'.$resultado->items[$i]->link.'">';
		echo $resultado->items[$i]->title;
		echo '</a>';
		echo '<br>';
	}

}

?>

<form method="post">
	<input type="text" name="q">
	<input type="hidden" name="busca">
	<input type="submit" name="acao" value="Buscar!">

</body>
</html>