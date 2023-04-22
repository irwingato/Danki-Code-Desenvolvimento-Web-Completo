<?php


	ob_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Título</title>
</head>
<body>
	<h2>Meu conteúdo</h2>
</body>
</html>
<?php
	$n = ob_get_contents();
	ob_end_clean();
	//echo $n;
?>