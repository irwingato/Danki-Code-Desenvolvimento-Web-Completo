<?php
	namespace controller;
	use \views\mainView;

	class homeController
	{
		public function index(){
			if(isset($_GET['addCurso'])){
				\MySql::conectar()->prepare("INSERT INTO `tb_admin_curso_controle` VALUES (null,$_SESSION[id_aluno])");
				\Painel::redirect(INCLUDE_PATH);
			}
			if(isset($_GET['deslogar'])){
				unset($_SESSION['login_aluno']);
				\Painel::redirect(INCLUDE_PATH);
			}
			if(isset($_POST['acao'])){
				$login = $_POST['login'];
				$senha = $_POST['senha'];
				$sql = \MySql::conectar()->prepare("SELECT * FROM `tb_admin_alunos` WHERE email = ? AND senha = ?");
				$sql->execute(array($login,$senha));
				if($sql->rowCount() == 1){
					$info = $sql->fetch();
					$_SESSION['login_aluno'] = $login;
					$_SESSION['nome_aluno'] = $info['nome'];
					$_SESSION['id_aluno'] = $info['id'];
				}else{
					\Painel::alertJS("Login ou senha incorretos!");
					\Painel::redirect(INCLUDE_PATH);
				}
			}
			if(!isset($_SESSION['login_aluno']))
				mainView::render('home.php');
			else
				mainView::render('area_aluno.php');
		}
	}
?>