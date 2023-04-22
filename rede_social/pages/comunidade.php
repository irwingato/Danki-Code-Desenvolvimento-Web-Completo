<section class="comunidade">
<div class="container">
<div class="w100">
	<h2 class="title">Comunidade</h2>
	<?php
		$select = \MySql::conectar()->prepare("SELECT * FROM `tb_site.membros`");
		$select->execute();
		$select = $select->fetchAll();
		foreach ($select as $key => $value) {
		if($value['id'] == $_SESSION['id_membro'])
			continue;
	?>
		<div class="membro-listagem">
			<div class="box-imagem">
				<div style="background-image:url('<?php echo INCLUDE_PATH_PAINEL ?>uploads/<?php echo $value['imagem']; ?>');" class="box-imagem-wraper"></div>
			</div>
			<p><i class="fa fa-user"></i> <?php echo $value['nome']; ?></p>
			<?php
				if($arr['controller']->isAmigo($value['id'])){
					echo '<span style="display:inline-block;opacity:0.4;font-size:14px;background:green;color:white;padding:4px 5px;" href=""><i class="fa fa-check"></i> Amigo(a)</span>';
				}
				else if($arr['controller']->amigoPendente($value['id']) == false){
			?>
			<a href="<?php echo INCLUDE_PATH ?>comunidade?addFriend=<?php echo $value['id']; ?>">Adicionar como amigo!</a>
			<?php }else{ ?>
			<a style="opacity: 0.4;background:gray;" href="javascript:void(0);">Solicitação pendente</a>
			<?php } ?>
		</div><!--membro-listagem-->

	<?php } ?>
	<div class="clear"></div>
</div>
</div>
</section>