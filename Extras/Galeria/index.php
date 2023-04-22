<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Galeria com PHP</title>
	<style type="text/css">
		img{
			max-width: 500px;
		}
	</style>
</head>
<body>
	<?php
		include('Galeria.php');
		$galeria = new Galeria();
	?>
<img src="<?php echo $galeria->getCurrentPicture(); ?>" />

<a href="<?php echo $galeria->getNextPicture(); ?>">Próxima</a>

<a href="">Anterior</a>

</body>
</html>