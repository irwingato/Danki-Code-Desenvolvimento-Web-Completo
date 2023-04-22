<?php
	$id = (int)$_GET['id'];
	$sql = MySql::conectar()->prepare("SELECT * FROM `tb_admin_imoveis` WHERE id = ?");
	$sql->execute(array($id));
	if($sql->rowCount() == 0){
		Painel::alert('erro',"O produto que você quer editar não existe!");
		die();
	}

	$infoProduto = $sql->fetch();

	$pegaImagens = MySql::conectar()->prepare("SELECT * FROM `tb_admin_imagens_imoveis` WHERE imovel_id = $id");
	$pegaImagens->execute();
	$pegaImagens = $pegaImagens->fetchAll();	
?>

<div class="box-content">
	<h2><i class="fa fa-pencial"></i> Editando Imóvel: <?php echo $id; ?></h2>	
	<div class="card-title"><i class="fa-solid fa-circle-info"></i> Informações do Imóvel:</div>
	<?php
		if(isset($_GET['deletarImagem'])){
			$idImagem = $_GET['deletarImagem'];
			@unlink(BASE_DIR_PAINEL.'/uploads/'.$idImagem);
			MySql::conectar()->exec("DELETE FROM `tb_admin_imagens_imoveis` WHERE imagem = '$idImagem'");
			Painel::alert('sucesso','A imagem foi deletada com sucesso!');
			$pegaImagens = MySql::conectar()->prepare("SELECT * FROM `tb_admin_imagens_imoveis` WHERE imovel_id = $id");
			$pegaImagens->execute();
			$pegaImagens = $pegaImagens->fetchAll();
		}else if(isset($_GET['deletarImovel'])){
			foreach ($pegaImagens as $key => $value) {
				@unlink(BASE_DIR_PAINEL.'/uploads/'.$value['imagem']);
			}
			MySql::conectar()->exec("DELETE FROM `tb_admin_imagens_imoveis` WHERE imagem = '$id'");	
			MySql::conectar()->exec("DELETE FROM `tb_admin_imoveis` WHERE id = $id");
			Painel::alertJS("O imóvel foi deletado com sucesso!");
			Painel::redirect(INCLUDE_PATH_PAINEL.'listar-empreendimentos');
		}
	?>
	<form method="post" action="<?php echo INCLUDE_PATH_PAINEL ?>editar-produto?id=<?php echo $id; ?>" enctype="multipart/form-data">
		
		<div class="form-group">
			<label>Nome do imóvel:</label>
			<input disabled="" type="text" name="nome" value="<?php echo $infoProduto['nome']; ?>">
		</div><!--form-group-->
		<div class="form-group">
			<label>Preço do imóvel:</label>
			<input disabled="" type="text" name="nome" value="<?php echo $infoProduto['preco']; ?>">
		</div><!--form-group-->
		<div class="form-group">
			<label>Área:</label>
			<input disabled="" type="text" name="nome" value="<?php echo $infoProduto['area']; ?>">
		</div><!--form-group-->
			<a style="font-size: 17px;padding:4px 10px;" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-imovel?id=<?php echo $id; ?>&deletarImovel"><i class="fa fa-times"></i> Excluir Imóvel</a>

	</form>
		<div class="card-title"><i class="fa-solid fa-circle-info"></i> Imagens do produto:</div>
	<div class="boxes">
		<?php
			foreach ($pegaImagens as $key => $value) { 
		?>
		<div class="box-single-wraper">
			<div style="border: 1px solid #ccc;padding: 8px 15px;">
				<div style="width: 100%;float: left;" class="box-imgs">
					<img class="img-square" src="<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['imagem'] ?>" />		
				</div><!--box-imgs-->
				<div class="clear"></div>
				<div class="group-btn">
					<!--PROBLEMA AQUI NO BOTÃO DELETAR ONDE NÃO DELETA, CASO SEJA CLICADO-->
					<a class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>editar-imovel?id=<?php echo $id; ?>&deletarImagem=<?php echo $value['imagem'] ?>"><i class="fa fa-times"></i> Excluir</a>
				</div>
			</div>
		</div><!--box-single-wrapper-->	
	<?php } ?>
	</div><!--boxes-->
</div>