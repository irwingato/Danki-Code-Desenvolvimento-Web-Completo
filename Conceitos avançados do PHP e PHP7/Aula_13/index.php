<?php
	include('Template.php');

	$template = new Template();
	$template->render(['titulo'=>'Meu titulo','nome'=>'Guilherme','idade'=>24],'sobre.phtml');
?>