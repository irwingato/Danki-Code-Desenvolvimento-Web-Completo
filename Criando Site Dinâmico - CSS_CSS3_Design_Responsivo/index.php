<!DOCTYPE html>
<html>
<head>	
	<title>Projeto 01</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="estilo/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="palavras-chave,do,meu,site">
	<meta name="description" content="Descrição do meu website">
	<meta charset="utf-8" />
</head>
<body>
	<header>
		<div class="center">
			<div class="logo float left">Logomarca</div><!--logo-->
			<nav class="desktop right">
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</nav>
			<nav class="mobile right">
				<div class="botao-menu-mobile">
					<i class="fa-solid fa-bars"></i>
				</div>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">Sobre</a></li>
					<li><a href="">Serviços</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</nav>
			<div class="clear"></div><!--clear-->
		</div><!--center-->
	</header>
	<section class="banner-principal">
		<div class="overlay"></div><!--overlay-->
		<div class="center">
			<form>
				<h2>Qual o seu melhor email?</h2>
				<input type="email" name="email" required />
				<input type="submit" name="acao" value="Cadastrar!">
			</form>
		</div><!--center-->
	</section><!--banner-principal-->
	<section class="descricao-autor">
		<div class="center">
			<div class="w50 left">
			<h2>Leão Júnior</h2>
			<p>Quisque sodales lacus et fringilla dapibus. Ut luctus tellus magna, nec tincidunt nibh congue non. Aenean quam odio, tempus ut suscipit id, malesuada nec libero. Curabitur commodo mi a erat porttitor, sed sollicitudin magna luctus. Pellentesque bibendum scelerisque luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum, metus et viverra hendrerit, dui sem rutrum elit, sed tempor orci justo sodales dolor. Morbi ac varius urna. Ut commodo tincidunt elit id laoreet. Proin fermentum risus sed ipsum tempor iaculis. Proin id laoreet ipsum. Etiam vel pretium lorem, sed mattis massa. Etiam egestas neque at urna pellentesque, et vestibulum nibh sollicitudin.</p>
			<p>Quisque sodales lacus et fringilla dapibus. Ut luctus tellus magna, nec tincidunt nibh congue non. Aenean quam odio, tempus ut suscipit id, malesuada nec libero. Curabitur commodo mi a erat porttitor, sed sollicitudin magna luctus. Pellentesque bibendum scelerisque luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dictum, metus et viverra hendrerit, dui sem rutrum elit, sed tempor orci justo sodales dolor. Morbi ac varius urna. Ut commodo tincidunt elit id laoreet. Proin fermentum risus sed ipsum tempor iaculis. Proin id laoreet ipsum. Etiam vel pretium lorem, sed mattis massa. Etiam egestas neque at urna pellentesque, et vestibulum nibh sollicitudin.</p>
			</div><!--w50-->
			<div class="w50 left">
				<!--Pegar imagem depois-->
				<img class ="right" src="images/foto.jpg" width = "395" height = "405" />
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--descricao-autor-->

	<section class="especialidades">		
		<div class="center">
			<h2 class="title">Especialidades</h2>
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-css3-alt"></i></h3>
				<h4>CSS3</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pretium lacinia lobortis. Sed venenatis scelerisque iaculis. Aenean sapien nunc, cursus id sapien quis, mollis iaculis urna. Fusce id tortor magna. Nam vel luctus neque, sit amet suscipit nisl. Etiam est est, dignissim in quam fringilla, pellentesque iaculis quam.</p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-html5"></i></h3>
				<h4>HTML5</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pretium lacinia lobortis. Sed venenatis scelerisque iaculis. Aenean sapien nunc, cursus id sapien quis, mollis iaculis urna. Fusce id tortor magna. Nam vel luctus neque, sit amet suscipit nisl. Etiam est est, dignissim in quam fringilla, pellentesque iaculis quam.</p>
			</div><!--box-especialidade-->
			<div class="w33 left box-especialidade">
				<h3><i class="fa-brands fa-js"></i></h3>
				<h4>JavaScript</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pretium lacinia lobortis. Sed venenatis scelerisque iaculis. Aenean sapien nunc, cursus id sapien quis, mollis iaculis urna. Fusce id tortor magna. Nam vel luctus neque, sit amet suscipit nisl. Etiam est est, dignissim in quam fringilla, pellentesque iaculis quam.</p>
			</div><!--box-especialidade-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--especialidades-->

	<section class="extras">
		<div class="center">
			<div class="w50 left depoimentos-container">
				<h2 class="title">Depoimentos dos nossos clientes</h2>
				<div class="depoimento-single">
					<p class="depoimento-descricao">
						'Maecenas ac gravida erat, eget pulvinar purus. Sed blandit enim erat, eu dapibus massa gravida sit amet. Sed eros urna, euismod at posuere eu, luctus at ipsum. Phasellus id ex sit amet lectus tempus lacinia nec in lorem. Mauris pretium non massa ac ullamcorper. Curabitur tincidunt nulla eros, vitae imperdiet eros fringilla et. Nulla in hendrerit ante. Curabitur at tortor ante. Quisque ac fringilla enim.'
					</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
					<div class="depoimento-single">
					<p class="depoimento-descricao">
						'Maecenas ac gravida erat, eget pulvinar purus. Sed blandit enim erat, eu dapibus massa gravida sit amet. Sed eros urna, euismod at posuere eu, luctus at ipsum. Phasellus id ex sit amet lectus tempus lacinia nec in lorem. Mauris pretium non massa ac ullamcorper. Curabitur tincidunt nulla eros, vitae imperdiet eros fringilla et. Nulla in hendrerit ante. Curabitur at tortor ante. Quisque ac fringilla enim.''
					</p>
					<p class="nome-autor">Lorem Ipsum</p>
					</div><!--depoimento-single-->			
					<div class="depoimento-single">
					<p class="depoimento-descricao">
						'Maecenas ac gravida erat, eget pulvinar purus. Sed blandit enim erat, eu dapibus massa gravida sit amet. Sed eros urna, euismod at posuere eu, luctus at ipsum. Phasellus id ex sit amet lectus tempus lacinia nec in lorem. Mauris pretium non massa ac ullamcorper. Curabitur tincidunt nulla eros, vitae imperdiet eros fringilla et. Nulla in hendrerit ante. Curabitur at tortor ante. Quisque ac fringilla enim.'
					</p>
					<p class="nome-autor">Lorem Ipsum</p>
				</div><!--depoimento-single-->
			</div><!--w50-->
			<div class="w50 left servicos-container">
				<h2 class="title">Serviços</h2>
				<div class="servicos">
					<ul>
						<li>Fusce tincidunt, lacus nec porttitor sagittis, felis urna efficitur ligula, id tempus turpis magna interdum eros. Etiam semper neque id blandit finibus. Duis fringilla felis vel pulvinar accumsan. Sed suscipit imperdiet rhoncus. Nam nisi eros, imperdiet vitae feugiat sed, lobortis facilisis magna. Sed congue ullamcorper massa pulvinar tempus. Morbi pellentesque dui nisl, non gravida lectus varius vel. Nam laoreet nibh vitae felis fermentum facilisis. Phasellus feugiat est cursus, iaculis felis sed, aliquam enim.</li>
						<li>Fusce tincidunt, lacus nec porttitor sagittis, felis urna efficitur ligula, id tempus turpis magna interdum eros. Etiam semper neque id blandit finibus. Duis fringilla felis vel pulvinar accumsan. Sed suscipit imperdiet rhoncus. Nam nisi eros, imperdiet vitae feugiat sed, lobortis facilisis magna. Sed congue ullamcorper massa pulvinar tempus. Morbi pellentesque dui nisl, non gravida lectus varius vel. Nam laoreet nibh vitae felis fermentum facilisis. Phasellus feugiat est cursus, iaculis felis sed, aliquam enim.</li>
						<li>Fusce tincidunt, lacus nec porttitor sagittis, felis urna efficitur ligula, id tempus turpis magna interdum eros. Etiam semper neque id blandit finibus. Duis fringilla felis vel pulvinar accumsan. Sed suscipit imperdiet rhoncus. Nam nisi eros, imperdiet vitae feugiat sed, lobortis facilisis magna. Sed congue ullamcorper massa pulvinar tempus. Morbi pellentesque dui nisl, non gravida lectus varius vel. Nam laoreet nibh vitae felis fermentum facilisis. Phasellus feugiat est cursus, iaculis felis sed, aliquam enim.</li>
					</ul>
				</div><!--servicos-->
			</div><!--w50-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--extras-->
	<footer>
		<div class="center">
			<p>Todos os direitos reservados</p>
		</div><!--center-->
	</footer>
</body>
</html>