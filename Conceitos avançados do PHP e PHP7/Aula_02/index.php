<?php
	function teste(){
		static $n = 0;
		$n++;
		return $n;
	}

	/*
	echo teste();
	echo '<br />';
	echo teste();
	*/

	/**
	 * 
	 */
	class Teste
	{
		
		public static function print()
		{
			static $n = 0;
			$n++;
			return $n;
		}
	}
	
	echo Teste::print();
	echo '<br />';
	echo Teste::print();
	
?>