<div class="box-content">
	<?php
		if(isset($_POST['acao'])){
			$email = $_POST['email'];
			$lista_id = $_POST['lista_id'];

			if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
				Painel::alert('erro','O e-mail informado é inválido');
			}else{
				//Inserir o contato
				$sql = \MySql::conectar()->prepare("INSERT INTO `tb_admin_contatos` VALUES (null,?,?)");
				$sql->execute(array($email,$lista_id));
				Painel::alert('sucesso','O contato foi inserido com sucesso!');
			}
		}
	?>

	<h2><i class="fa-solid fa-pen"></i> Adicionar novo contato</h2>	

	<form method="post">

		<div class="form-group">
			<label>E-mail do contato:</label>
			<input type="text" name="email">
		</div><!--form-group-->
		<div class="form-group">
			<label>Lista do contato:</label>
			<select name="lista_id">
				<?php
					$listas = \MySql::conectar()->prepare("SELECT * FROM `tb_admin_listas_email`");
					$listas->execute();
					$listas = $listas->fetchAll();
					foreach ($listas as $key => $value) {
				?>
					<option value="<?php echo $value['id'] ?>"><?php echo $value['nome_lista'] ?></option>
				<?php } ?>
			</select>
			<input type="submit" name="acao" value="Adicionar Contato">
		</div><!--form-group-->
	</form>

	<h2><i class="fa fa-pencial"></i> Contatos Disponíveis</h2>
	
	<div class="wraper-table">
	<table>
		<tr>
			<td>E-mail</td>
			<td>Lista</td>
			<td>#</td>
		</tr>

		<?php 
			$contatos = \MySql::conectar()->prepare("SELECT * FROM `tb_admin_contatos`");
			$contatos->execute();
			$contatos = $contatos->fetchAll();
			foreach ($contatos as $key => $value) {
			$nomeLista = \MySql::conectar()->prepare("SELECT nome_lista FROM `tb_admin_listas_email` WHERE id = $value[lista_id]");
			$nomeLista->execute();
			$nomeLista = $nomeLista->fetch()['nome_lista'];
		?>
		
		<tr>
			<td><?php echo $value['email']; ?></td>
			<td><?php echo $nomeLista ?></td>
			<td><a actionBtn="delete" class="btn delete" href="<?php echo INCLUDE_PATH_PAINEL ?>listar-servicos?excluir=9"><i class="fa fa-times"></i> Excluir</a></td>
		</tr>

		<?php } ?>
	</table>

	</div><!--wraper-table-->


</div>