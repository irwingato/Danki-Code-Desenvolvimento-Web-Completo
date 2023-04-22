<?php
	

	include('../../includeConstants.php');	

	$data['sucesso'] = true;
	$data['mensagem'] = "";

	if(Painel::logado() == false){
		die("Você não está logado");
	}

	/*Nosso código começa aqui*/
	if(isset($_POST['tipo_acao']) && $_POST['tipo_acao'] == 'cadastrar_cliente'){
	sleep(2);

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$tipo = $_POST['tipo_cliente'];
	$cpf = '';
	$cnpj = '';
	if($tipo == 'fisico'){
		$cpf = $_POST['cpf'];
	}else if($tipo == 'juridico'){
		$cnpj = $_POST['cnpj'];
	}

	$imagem = "";
	if($nome  == "" || $email == "" || $tipo == ""){
		$data['sucesso'] = false;
		$data['mensagem'] = "Atenção: Campos vazios não são permitidos!";
	}

	if(isset($_FILES['imagem'])){
		if(Painel::imagemValida($_FILES['imagem'])){
			$imagem = $_FILES['imagem'];		
		}else{
			$imagem = "";		
			$data['sucesso'] = false;
			$data['mensagem'] = "Você está tentando realizar um upload com imagem inválida.";
		}
	}

	if($data['sucesso']){
		if(is_array($imagem))
			$imagem = Painel::uploadFile($imagem);
		$sql = MySql::conectar()->prepare("INSERT INTO `tb_admin_clientes` VALUES (null,?,?,?,?,?)");
		$dadoFinal = ($cpf == '') ? $cnpj : $cpf;
		$sql->execute(array($nome,$email,$tipo,$dadoFinal,$imagem));
		$data['mensagem'] = "O cliente foi cadastrado com sucesso!";
	}

	}else if(isset($_POST['tipo_acao']) && $_POST['tipo_acao'] == 'atualizar_cliente'){
		sleep(2);
		
		$id = $_POST['id'];	
		$nome = $_POST['nome'];
		$email = $_POST['email'];
		$tipo = $_POST['tipo_cliente'];
		$imagem = $_POST['imagem_original'];
		$cpf = '';
		$cnpj = '';
		if($tipo == 'fisico'){
			$cpf = $_POST['cpf'];
		}else if($tipo == 'juridico'){
			$cnpj = $_POST['cnpj'];
		}

		if($nome == '' || $email == ''){
			$data['sucesso'] = false;
			$data['mensagem'] = "Campos vazios não são permitidos!";
		}

		if(isset($_FILES['imagem'])){
			if(Painel::imagemValida($_FILES['imagem'])){
				@unlink('../uploads/'.$imagem);
				$imagem = $_FILES['imagem'];
			}else{
				$imagem = "";
				$data['sucesso'] = false;
				$data['mensagem'] = "Você está tentando realizar um upload com imagem inválida.";
			}
		}

		if($data['sucesso']){
			if(is_array($imagem)){
				$imagem = Painel::uploadFile($imagem);
			}

			$sql = MySql::conectar()->prepare("UPDATE `tb_admin_clientes` SET nome = ?,email=?,tipo=?,cpf_cnpj=?,imagem=?  WHERE id = $id");
					
			$dadoFinal = ($cpf == '') ? $cnpj : $cpf;
			$sql->execute(array($nome,$email,$tipo,$dadoFinal,$imagem));

			
		}

	}else if(isset($_POST['tipo_acao']) && $_POST['tipo_acao'] == 'deletar_cliente'){
		$id = $_POST['id'];

		$sql = MySql::conectar()->prepare("SELECT imagem FROM `tb_admin_clientes` WHERE id = $id");
		$sql->execute();
		//Erro ao verificar se possui mais de uma imagem para excluir verificar depois, está dando o erro de type of bool		
		$imagem = $sql->fetch()['imagem'];
		@unlink('../uploads/'.$imagem);
		MySql::conectar()->exec("DELETE FROM `tb_admin_clientes` WHERE id = $id");
		MySql::conectar()->exec("DELETE FROM `tb_admin_financeiro` WHERE cliente_id = $id");
			
	}

	die(json_encode($data));
	
?>