<?php
	$counteudo = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt nisl eu augue pretium accumsan. Aliquam vitae arcu tempor, porta quam non, dignissim urna. Ut at erat erat. Aenean pellentesque molestie eros in vehicula. Praesent magna ipsum, aliquam ac efficitur eget, tempus nec turpis. Phasellus porta nisl sed consectetur egestas. Integer luctus augue felis, at euismod lacus sollicitudin et. Nulla sollicitudin volutpat quam, quis sodales dolor sodales eu. Morbi ut mattis augue. Nam pretium condimentum purus vel accumsan. Ut accumsan orci quis augue ornare, sed cursus nisl placerat. Sed quis erat sit amet velit sollicitudin rutrum in nec libero.';

	//Serve para recortar uma string.
	//echo substr($conteudo,0,20);

	$nome = 'Guilherme Cherem Grillo';

	$nomes = explode(' ',$nome);

	//print_r($nomes);

	//Serve para juntar um array com um delimitador.
	//No caso o espaço;

	$nomes = implode(' ', $nomes);

	//echo $nomes;

	//Strip_tags serve para retirar todo codigo HTML.
	$conteudo = '<h1>Guilherme</h1>Outra coisa';

	//echo strip_tags($conteudo);

	//htmlentities que mostra o código html na página.

	echo htmlentities('<div></div>');

?>