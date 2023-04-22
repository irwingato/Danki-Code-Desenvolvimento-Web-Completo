<?php
	namespace models;

	class homeModel{

		public static function pegaImoveis(){
			$selectImoveis = \MySql::conectar()->prepare("SELECT * FROM `tb_admin_imoveis`");
			$selectImoveis->execute();
			return $selectImoveis->fetchAll();
		}

	}
?>