<?php
	class Utils
	{
		public function printMsg($msg){
			$msg->showMessage();
		}
	}

	$utils = new Utils();

	$utils->printMsg(new Class{
		public function showMessage(){
			echo 'Olá mundo!';
		}
	});
?>