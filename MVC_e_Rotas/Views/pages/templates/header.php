<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Título</title>
	<link href="<?php echo INCLUDE_PATH_FULL ?>css/style.css" rel="stylesheet" type="text/css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<header>
	<div class="center">
		<div class="logo">
			<h2>Danki Code</h2>
		</div>
		<nav class="menu">
			<?php
				foreach ($this->menuItems as $key => $value) {
					echo '<a href="'.INCLUDE_PATH.strtolower($value).'">'.$value.'</a>';
				}
			?>
		</nav>
		<div class="clear"></div>
	</div>
</header>