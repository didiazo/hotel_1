<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/domus2.css" media="all" />
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicons/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicons/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicons/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicons/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicons/apple-touch-icon-152x152.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-196x196.png" sizes="196x196">
	<link rel="icon" type="image/png" href="img/favicons/favicon-160x160.png" sizes="160x160">
	<link rel="icon" type="image/png" href="img/favicons/favicon-96x96.png" sizes="96x96">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<meta name="msapplication-TileImage" content="img/favicons/mstile-144x144.png">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">

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

	<link rel="stylesheet" href="css/animsition.min.css">
	<script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.animsition.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/trunk.js"></script>
	<!--[if lt IE 9]><script src="js/html5shiv.js"></script><![endif]-->
	<script>
	$(document).ready(function() {
		$(".animsition").animsition({
		inClass               : 'fade-in',
		outClass              : 'fade-out',
		inDuration            : 1500,
		outDuration           : 800,
		linkElement           : '.animsition-link', 
		// e.g. linkElement   : 'a:not([target="_blank"]):not([href^=#])'
		touchSupport          : true, 
		loading               : true,
		loadingParentElement  : 'body', //animsition wrapper element
		loadingClass          : 'animsition-loading',
		unSupportCss          : ['animation-duration','-webkit-animation-duration','-o-animation-duration']
		});
		$('.selloq img').hover(function(){
			$('.selloq a').css('margin-right','50px');
		}, function() {
			$('.selloq a').css('margin-right','30px');
		});
		var altoVentana = $( window ).height();
		$('.body-min').css('min-height',altoVentana-32);
	});
	function playPause() {
		var myVideo = document.getElementById("bgvid");
		if (myVideo.paused)	myVideo.play(); 
		else myVideo.pause(); 
	}
	</script>
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
		<header class="slide">
			<ul id="navToggle" class="burger slide">
				<li></li><li></li><li></li>
			</ul>
		</header>
		<nav class="menu slide">
			<ul>
				<li><a href="#" class="logo"><img src="img/logo-domus-mare-grey.png" alt="domusmare" /></a></li>
				<li><a href="#">HOTEL</a></li>
				<li><a href="#">CONCEPTO ENTORNO</a></li>
				<li><a href="#">HABITACIONES</a></li>
				<li><a href="#">PRENSA</a></li>
				<li><a href="#">DOMUS CLUB</a></li>
				<li><a href="#">EMPRESAS</a></li>
				<li><a href="#">PROGRAMAS Y SERVICIOS</a></li>
				<li><a href="#">RESERVAS, CONTACTO Y TARIFAS</a></li>
			</ul>
			<ul class="social">
				<li><a title="Tiempo" href="#" target="_blank"><img src="img/icons/tiempo.png" /></a></li>
				<li><a title="Postal" href="#" target="_blank"><img src="img/icons/postal.png" /></a></li>
				<li><a title="facebook" href="#" target="_blank"><img src="img/icons/facebook.png" /></a></li>
				<li><a title="twitter" href="#" target="_blank"><img src="img/icons/twitter.png" /></a></li>
				<li><a title="Español" href="#" target="_blank">ES</a></li>
				<li><a title="English" href="#" target="_blank">EN</a></li>
				<li class="selloq"><a title="Sello" href="#" target="_blank"><img src="img/icons/selloq.png" /></a></li>
			</ul>
		</nav>
		<div class="content slide">
			<ul class="responsive slide">
				<li class="header header-min header-section">
					
				</li>
				<li class="body-min body-section">
					<br /><h1 style="font-size:20px">The Hotel</h1><br /><br />
					<p style="font-size:15px">Desde su apertura a inicios del 2013, Domus Mare ha sido un ícono en restauración cultural y patrimonial en el cerro Recreo, uno de los sectores más simbólicos y auténticos de Viña del Mar, gracias a toda la herencia cultural de las casonas que lo conforman junto a vistas panorámicas a la bahía del Pacífico.<br /><br />El hotel abrió sus puertas en marzo del 2013 con diez hermosas y lujosas habitaciones que lo hacen ser una verdadera casa del mar, tal como su nombre lo indica. Buscando ser un lugar físico que genere circunstancias y experiencias que entregarán todo el lujo de una mansión inglesa del siglo pasado, con todo el confort e innovación que le otorga el paso del tiempo, convirtiéndolo en un ícono que busca ser el facilitador de generar las mejores experiencias en cuanto a relajo y confort junto a la belleza natural del Océano Pacifico a los pies.<br /><br />Algunos conceptos icónicos que son la esencia de Domus Mare:<br />· Relajo<br />· Lujo<br />· Estilo<br />· Exclusividad<br />· Confort<br />· Prestigio<br />· Autenticidad<br />· Trascendencia<br />· Sentimientos<br />· Asombro<br />· Evolución<br />· Misterio<br />· Sentidos</p>
				</li>
			</ul>
		</div><!--/container->
	</div><!--/container-->
</div><!--/animsition-->
</body>
</html>