<!--
<form method="post">
	<input type="text" name="address" />
	<input type="submit" name="acao" value="Enviar" />
</form>
-->

<?php
	//Aula CURL
	$endereco = urlencode('coqueiros');
	$curl = curl_init();

	curl_setopt($curl, CURLOPT_URL,"http://maps.googleapis.com/maps/api/geocode/json?address=$endereco");
	//curl_setopt($curl, CURLOPT_POST, 1);

	// na vida real você pode usar passando como array e usar a função http_build_query
	//curl_setopt($curl, CURLOPT_POSTFIELDS,http_build_query(array()));
	
	//receive server response
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	$server_output = curl_exec($curl);

	curl_close ($curl);

	//Requisição com CURL no server local.
	/*
	$resultado = json_decode($server_output);

	echo $resultado->titulo[0];
	ecgi '<br />';
	echo $resultado->conteudo[0];

	/*
	if(isset($_POST['acao'])){
		//Requisição para o google utilizando file get contents	
		
		$url = urlencode($_POST['address']);
		$str = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$url.'&sensor=false');
		
		echo '<pre>';
			var_dump($str);

		echo '</pre>';
	

		echo 'Nome do bairro:';
		echo '<br />';
		echo $endereco->results[0]->address_components[1]->short_name;

		echo '<hr>';

		echo 'Nome correto da rua:';
		echo '<br />';
		echo $endereco->results[0]->address_components[0]->short_name;
	
	}
	*/
	
?>