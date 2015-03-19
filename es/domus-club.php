<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<?php require_once '../class/function.php'; $url = curPageURL(); ?>
	<?php require_once "./include/head.php"; ?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?=$url?>/css/domus.css" media="all" />
	<link rel="shortcut icon" href="<?=$url?>/img/favicons/favicon.ico">
	<meta name="description" content=""/>
	<link rel="canonical" href="" />
	<meta property="og:locale" content="es_ES" />
	<meta property="og:type" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="Domus Mare" />
	<meta property="og:image" content="" />
	<meta property="og:image" content="" />
	<meta property="og:image" content="" />

	<link rel="stylesheet" href="<?=$url?>/css/animsition.min.css">
	<script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=$url?>/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=$url?>/js/trunk.js"></script>
	
</head>
<body>
<div class="animsition">
	<button id="play" onclick="playPause()">Play/Pause</button>
	<!--<video autoplay loop poster="videos/leon.jpg" id="bgvid" class="bgvid">
		<!--<source src="videos/polina.webm" type="video/webm">->
		<source src="videos/leon.ogv" type="video/ogg">
		<source src="videos/leon.mp4" type="video/mp4">
	</video>-->
	<div class="container">
		<?php include 'include/menu.php'; ?>
		<div class="content slide">
			<ul class="responsive slide">
				<li class="header header-min header-section">
					<ul class="logos">
						<li><a title="Tiempo" href="#" target="_blank"><img src="<?=$url?>/img/icons/tiempo.png" /></a></li>
						<li><a title="Postal" href="#" target="_blank"><img src="<?=$url?>/img/icons/postal.png" /></a></li>
						<li><a title="facebook" href="#" target="_blank"><img src="<?=$url?>/img/icons/facebook.png" /></a></li>
						<li><a title="twitter" href="#" target="_blank"><img src="<?=$url?>/img/icons/twitter.png" /></a></li>
						<li><a title="Español" href="#" target="_blank">ES</a></li>
						<li><a title="English" href="#" target="_blank">EN</a></li>
						<li class="selloq"><a title="Sello" href="#" target="_blank"><img src="<?=$url?>/img/icons/selloq.png" /></a></li>
					</ul>
				</li>
				<li class="body-section">
					<div class="body-min">
					<br /><h1 style="font-size:20px">The Hotel</h1><br /><br />
					<p style="font-size:15px">Desde su apertura a inicios del 2013, Domus Mare ha sido un ícono en restauración cultural y patrimonial en el cerro Recreo, uno de los sectores más simbólicos y auténticos de Viña del Mar, gracias a toda la herencia cultural de las casonas que lo conforman junto a vistas panorámicas a la bahía del Pacífico.<br /><br />El hotel abrió sus puertas en marzo del 2013 con diez hermosas y lujosas habitaciones que lo hacen ser una verdadera casa del mar, tal como su nombre lo indica. Buscando ser un lugar físico que genere circunstancias y experiencias que entregarán todo el lujo de una mansión inglesa del siglo pasado, con todo el confort e innovación que le otorga el paso del tiempo, convirtiéndolo en un ícono que busca ser el facilitador de generar las mejores experiencias en cuanto a relajo y confort junto a la belleza natural del Océano Pacifico a los pies.<br /><br />Algunos conceptos icónicos que son la esencia de Domus Mare:<br />· Relajo<br />· Lujo<br />· Estilo<br />· Exclusividad<br />· Confort<br />· Prestigio<br />· Autenticidad<br />· Trascendencia<br />· Sentimientos<br />· Asombro<br />· Evolución<br />· Misterio<br />· Sentidos</p>
					</div>
				</li>
			</ul>
		</div><!--/container->
	</div><!--/container-->
</div><!--/animsition-->
</body>
</html>