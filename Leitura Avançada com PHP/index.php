<?php

   //Ler arquivo XML

 // $xml = simplexml_load_file('arquivo.xml');

 // echo $xml->informacoes->item->title;
  //echo $xml->informacoes2->item->nome;

//Criando xml a partir de um array
/*
escreverXML(array('guilherme'=>'nome','24'=>'idade','futebol,tennis'=>'esportes'),'arquivo.xml');

//Lendo o xml.
$content = simplexml_load_file('arquivo.xml');

echo $content->esportes;

function escreverXML($arr,$nomedoarquivo){
		$xml = new SimpleXMLElement('<root/>');
		array_walk_recursive($arr, array ($xml, 'addChild'));
		file_put_contents($nomedoarquivo,$xml->asXML());
}
*/

//$json = '{"a":"guilherme","b":{"0":"felipe","1":"joao"},"c":3,"d":4,"e":5}';

//var_dump(json_decode($json));

/*
//Decodificamos o json
$obj = json_decode($json);
$arr = json_decode($json,true);
*/

/*
$arr = ['nome'=>'guilherme','cidade'=>'floripa'];

$json = json_encode($arr);
echo $json;
*/
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
	$(function(){
		$.ajax({
			url:'request.php',
			dataType:'json'
		}).done(function(data){
			console.log(data.nome);
		})
	})
</script>
</body>
</html>