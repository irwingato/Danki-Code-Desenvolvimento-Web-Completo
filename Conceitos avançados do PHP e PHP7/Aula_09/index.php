<?php
	
	$str = 'Gui
	ok';

	if(preg_match('/gui\\r\\nok/is',$str)){
		echo 'ok';
	}

?>