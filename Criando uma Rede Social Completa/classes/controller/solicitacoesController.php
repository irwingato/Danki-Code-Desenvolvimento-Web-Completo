<?php
	namespace controller;
	use \views\mainView;

	class solicitacoesController
	{
		public function index(){
			if(!isset($_SESSION['email_membro'])){
				\Painel::redirectJS(INCLUDE_PATH);
			}

			if(isset($_GET['aceitar'])){
				$idSolicitante = (int)$_GET['aceitar'];
				$sql = \MySql::conectar()->prepare("UPDATE `tb_site_solicitacoes` SET status = 1 WHERE id_from = ? AND id_to = ?");
				$sql->execute(array($idSolicitante,$_SESSION['id_membro']));
			}
			else if(isset($_GET['rejeitar'])){
				$idSolicitante = (int)$_GET['rejeitar'];
				$sql = \MySql::conectar()->prepare("DELETE FROM `tb_site_solicitacoes` WHERE id_from = ? AND id_to = ?");
				$sql->execute(array($idSolicitante,$_SESSION['id_membro']));
			}

			mainView::render('solicitacoes.php',['controller'=>$this],'pages/includes/headerLogado.php');
		}

		public static function listarSolicitacoes(){
			$sql = \MySql::conectar()->prepare("SELECT * FROM `tb_site_solicitacoes` WHERE id_to = ? AND status = 0");
			$sql->execute(array($_SESSION['id_membro']));

			return $sql->fetchAll();
		}
	}
?>