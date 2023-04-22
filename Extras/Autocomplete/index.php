<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Auto Complete</title>
</head>
<body>
	<form method="post">
		<input type="text" name="texto">
		<input type="submit" name="acao" value="Pesquisar!">
	</form>
	<?php
		$arr = ['danki code é bom','curso danki code','danki code desenvolvimento web'];
		if(isset($_POST['acao'])){
			$texto = $_POST['texto'];
			$finalArr = [];
			foreach ($arr as $key => $value) {
				if(preg_match('/'.$texto.'/',$value)){
					$finalValue = preg_replace('/'.$texto.'/','<b>$0</b>',$value);
					$finalArr[] = $finalValue;
				}
			}

			print_r($finalArr);			
		}
	?>
</body>
</html>