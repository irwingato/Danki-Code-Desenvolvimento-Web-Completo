<?php
	if(isset($_GET['deslogar'])){
		Usuarios::deslogar();
		header('Location:'.INCLUDE_PATH);
	}
	if(isset($_GET['action'])){
		$action = $_GET['action'];
		if($action == ACTION_LIKE){
			Usuarios::executarAcao(ACTION_LIKE,$_GET['id']);
		}else if($action == ACTION_DISLIKE){
			Usuarios::executarAcao(ACTION_DISLIKE,$_GET['id']);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bem vindo(a) <?php echo $_SESSION['nome'] ?></title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		html,body{
			height: 100%;
		}
		.sidebar{
			width: 300px;
			height: 100%;
			float: left;
			background: rgb(230,230,230);
		}
		.topo{
			padding: 10px;
			background: #e82975;
			color: white;
		}
		.topo a{
			color: white;
		}
		.btn-coord{text-align: center;}
		.btn-coord button{
			margin-top:10px;
			background: #e82975;
			padding: 8px 10px;
			color: white;
			font-weight: bold;
			border: 0;
			cursor: pointer;
			text-decoration: none;
			display: inline-block;
		}
		.info-localizacao{
			padding: 10px;
		}

		.box-usuario-like{
			position: absolute;
			left: 50%;
			top: 50%;
			transform: translate(-50%,-50%);
			width: 400px;
			height: 400px;
			background: rgb(230,230,230);
			line-height: 400px;
			text-align: center;
		}

	</style>
</head>
<body>
	<div class="sidebar">
		<div class="topo">				
			<h3>Bem-vindo <?php echo $_SESSION['nome']; ?> | <a href="<?php echo INCLUDE_PATH ?>?deslogar">Deslogar!</a></h3>
		</div>
		<div class="btn-coord">		
			<button onClick="getLocation()">Atualizar Coordenadas!</button>
		</div>
		<div id="localizacao" class="info-localizacao">
			<p class="lat-text"><?php echo $_SESSION['latitude'] ?></p>
			<p class="long-text"><?php echo $_SESSION['longitude'] ?></p>
			<p>Localização: <?php echo $_SESSION['localizacao']; ?></p>
			<br />
			<h3>Seus crushs:</h3>
			<ul>
				<?php
					$crushs = Usuarios::pegaCrushs();
					foreach ($crushs as $key => $value) {					
				?>
				
				<li><?php echo $value['nome'] ?> | <span style="display: none;" class="lat-user"><?php echo $value['lat_coord'] ?></span>
				<span style="display: none;" class="long-user"><?php echo $value['long_coord'] ?></span>Distância: <span class="user-distancia"></span></li>
			<?php } ?>
			</ul>
		</div>		
	</div>

	<div class="box-usuario-like">
		<div class="box-usuario-nome">
			<?php				
				$usuario = Usuarios::pegaUsuarioNovo();
			?>
			<h2><?php echo $usuario['nome']; ?>
			<a href="?action=1&id=<?php echo $usuario['id']; ?>">Gostei!</a>|
			<a href="?action=0&id=<?php echo $usuario['id']; ?>">Não Gostei!</a>
			</h2>
		</div><!--box-usuario-like-->
	</div><!--box-usuario-like-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
	function getLocation() {
	  if (navigator.geolocation) {
	    navigator.geolocation.getCurrentPosition(showPosition);
	  } 
	}

	function showPosition(position) {
		$('p.lat-text').html('Latitude: '+ position.coords.latitude);
		$('p.long-text').html('Longitude: '+ position.coords.longitude);

		//Passando via AJAX para atualizar no banco.
		atualizarCoordenadas(position.coords.latitude,position.coords.longitude);
	}

	function atualizarCoordenadas(latitudePar,longitudePar){
		$.ajax({
			url:'/tinder/atualizar-coord.php',
			method:'post',
			data:{latitude:latitudePar,longitude:longitudePar}
		}).done(function(){
			alert('Atualizado com sucesso!');
		})
	}

	</script>
		
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<script>
		$(function(){

		var myLat = $('.lat-text').html();
		var myLong = $('.long-text').html();

		console.log(myLat);
		console.log(myLong);

		$('li').each(function(){
			var coord_lat = $(this).find('.lat-user').html();
			var coord_long = $(this).find('.long-user').html();
			var distance =Math.round(getDistanceFromLatLonInKm(myLat,myLong,coord_lat,coord_long) * 100) / 100 ;
			$(this).find('.user-distancia').html(distance);
		})

		function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
		  var R = 6371; // Radius of the earth in km
		  var dLat = deg2rad(lat2-lat1);  // deg2rad below
		  var dLon = deg2rad(lon2-lon1); 
		  var a = 
		    Math.sin(dLat/2) * Math.sin(dLat/2) +
		    Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
		    Math.sin(dLon/2) * Math.sin(dLon/2)
		    ; 
		  var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
		  var d = R * c; // Distance in km
		  return d;
		}

		function deg2rad(deg) {
		  return deg * (Math.PI/180)
		}

	})
	</script>

</body>
</html>