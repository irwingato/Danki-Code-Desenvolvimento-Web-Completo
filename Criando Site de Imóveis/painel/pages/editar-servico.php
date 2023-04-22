<?php
	if(isset($_GET['id'])){
		$id = (int)$_GET['id'];
		$servico = Painel::select('tb_site_servicos', 'id = ?',array($id));
	}else{
		Painel::alert('erro', 'Você precisa passar por parâmetro ID.');
		die();
	}

?>
<div class="box-content">
	<h2><i class="fa-solid fa-pen"></i> Editar Serviço</h2>

	<form method="post" enctype="multipart/form-data">

		<?php
			if(isset($_POST['acao'])){
				if(Painel::update($_POST)){
					Painel::alert('sucesso','O serviço foi editado com sucesso!');
					$servico = Painel::select('tb_site_servicos','id = ?',array($id));
				}else{
					Painel::alert('erro','Campos vázios não são permitidos.');
				}
			}	
		?>

		<div class="form-group">
			<label>Servico:</label>
			<textarea name="servicos"><?php echo $servico['servicos']; ?></textarea>
		</div><!--form-group-->

		<div class="form-group">
			<input type="hidden" name="id" value="<?php echo $servico['id'];?>">
			<input type="hidden" name="nome_tabela" value="tb_site_servicos" />
			<input type="submit" name="acao" value="Atualizar!">
		</div><!--form-group-->
	</form>



</div><!--box-content-->