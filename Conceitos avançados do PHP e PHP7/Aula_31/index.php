<?php
	$original = 'guilherme@gmail.com';
	$modificada = preg_replace('/(.*?)@(.*?)\.(.*?)$/', '$1@dankicode.$3',$original);
?>