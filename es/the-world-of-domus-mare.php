<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<?php require_once '../class/function.php'; $url = curPageURL(); ?>
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
	<!--[if lt IE 9]><script src="../js/html5shiv.js"></script><![endif]-->
	<link rel='stylesheet' id='camera-css'  href='<?=$url?>/css/camera.css' type='text/css' media='all'> 
    <style>
		#back_to_camera{background:rgba(255,255,255,.9);clear:both;display:block;height:40px;line-height:40px;padding:20px;position:relative;z-index:1;}
		.fluid_container{bottom:0;height:100%;left:0;position:fixed;right:0;top:0;z-index:0;}
		#camera_wrap_4{height:400px;}
		.camera_overlayer{opacity:.1;}
	</style>
    
    <script type='text/javascript' src='<?=$url?>/js/jquery.min.js'></script>
    <script type='text/javascript' src='<?=$url?>/js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='<?=$url?>/js/jquery.easing.1.3.js'></script> 
    <script type='text/javascript' src='<?=$url?>/js/camera.min.js'></script> 
	<script>
	jQuery(function(){
		jQuery('#camera_wrap_4').camera({
			height: '400px',
			loader: 'bar',
			pagination: false,
			thumbnails: false,
			hover: false,
			opacityOnGrid: true,
			fx: 'scrollTop',
			imagePath: '../images/',
			overlayer: false
		});
	});
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
	<div class="container">
		
		<?php include 'include/menu.php'; ?>
		<div class="content slide">
			<ul class="responsive slide">
				<li class="body-section">
					<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
						<div data-src="<?=$url?>/img/the-world-of-domus-mare/1.jpg">
						</div>
						<div data-src="<?=$url?>/img/the-world-of-domus-mare/2.jpg">
						</div>
						<div data-src="<?=$url?>/img/the-world-of-domus-mare/3.jpg">
						</div>
						<div data-src="<?=$url?>/img/the-world-of-domus-mare/4.jpg">
						</div>
						<div data-src="<?=$url?>/img/the-world-of-domus-mare/5.jpg">
						</div>
					</div>
					<div class="info">
						<div class="center">
							<div class="flt-1">
								<img class="titulo" src="http://domusmare.cl/wp-content/themes/mitema/img/concepto/c1.png"/>
								<div class="contenido">
									<div>
									<h3>VALPARAÍSO, LA JOYA DEL PACÍFICO</h3>
									<p>Pintoresca e interesante, resulta Valparaíso, una de las ciudades icónicas para una estadía en Chile.</p>
									<p>Fue declarada Patrimonio de la Humanidad por UNESCO, debido a su grandioso contenido cultural. Ascensores coloridos sobresalen de sus hermosos cerros, junto a la inmensidad de la "Joya del Pacífico a los pies" donde cada madrugada y atardecer, la belleza de los barcos predomina, generando una atmósfera inigualable que la hacen ser una verdadera capital cultural. Hermosa, única e imperdible para disfrutar la diversidad e historia.</p>
									<p>Para deleitar los sentidos, inolvidables es visitar la caleta de pescadores y conocer en persona la variedad de frescos frutos del mar extraídos directamente del Pacífico. Nada más exquisito que un caldillo de congrio o una langosta fresca.</p>
									</div>
								</div>
							</div>
							<div class="flt-1">
								<img class="titulo" src="http://domusmare.cl/wp-content/themes/mitema/img/concepto/c3.png"/>
								<div class="contenido">
									<div>
									<h3>NATURALEZA ACTIVA</h3>
									<p>Terrazas con banderas que flamean con el viento marino y un imponente océano inmensurable, aroma a sal, pequeños roces del viento en la frente mientras este inmenso océano se impone con límites poco claros y difusos, pareciendo una fotografía.</p>
									<p>Gaviotas que vuelan y a veces ingresan al agua lanzando pequeñas gotas al sumergirse.</p>
									<p>Arena delgada de color café claro, hacen de este retrato una experiencia inolvidable, que a pesar de tratarse de "La Joya del Pacífico" y ser agua helada, intrigan por observarlo, no sólo en verano, sino también en invierno donde este mar está igual de hermoso con su sinfonía de barcos.</p>
									</div>
								</div>
							</div>
							<div class="flt-1" style="border:none">
								<img class="titulo" src="http://domusmare.cl/wp-content/themes/mitema/img/concepto/c2.png"/>
								<div class="contenido">
									<div>
									<h3>ARTE, PATRIMONIO Y CULTURA</h3>
									<p>Para experimentar el asombro, la regíon de Valparaíso está llena de Arte, los sectores de Viña del Mar y Valparaíso son encantadores, se puede revivir el recuerdo de lo que fueran los primeros barrios que conformarán la ciudad.</p>
									<p>Viña del mar está cargada de belleza al igual que Valparaíso. Figuras ilustres presentes en la ciudad son Lukas con sus famosas caricaturas posibles de apreciar en el Paseo Gervasoni del Cerro Concepción.</p>
									<p>La poesía, otro punto icónico resalta la Sabastina, casa del Premio Nobel de Literatura, Pablo Neruda.</p>
									<p>El arte es algo que se aprecia en cada calle y ángulo de la región, ya que la atmósfera en sí tiene un arte y encanto particular, difícil de expresar en palabras, ya que se trata de sensaciones, o mas bien de un silencio que habla por sí solo...</p>
									</div>
								</div>
							</div>
						</div>
						<div class="cpt">
							<div class="center">
								<img src="http://domusmare.cl/wp-content/themes/mitema/img/concepto/casa.png" />
								<h1>THE WORLD OF DOMUS MARE</h1>
							</div>
							<div class="lft-2">
								<p>Domus Mare es más que un hotel, es un ícono de arte, cultura y patrimonio. Cada rincón tiene un detalle e intencionalidad, que lo hace ser auténtico e inigualable. Su fundamento se basa en el equilibrio entre patrimonio, herencia y diseño y la autenticidad de la vista a un océano inmensurable por otro lado.</p>
								<p>Ubicada en la V región de Valparaíso, Chile, Viña del mar es considerada como uno de los principales destinos turísticos del país. Esta turística ciudad, está dotada de extensos y hermosos balnearios en la costa pacifico, caracterizándose además, por poseer numerosos jardines y una bellísima vegetación, que la hacen llamar “La ciudad Jardín”.</p>
								<p>Poseedora de un clima mediterráneo, gracias a la influencia que ejerce el océano pacifico sobre la ciudad, Viña del mar goza de temperaturas agradables, sin grandes fluctuaciones, siendo ideal para descansar junto al mar o en alguno de sus numerosos parques. Durante los meses de invierno, las temperaturas oscilan entre los 10° y 16° Celsius, mientras que durante el verano, el promedio va de los 17° a 25° Celsius.</p>
								<p>El agradable clima de la "ciudad jardín", transforman a Viña del Mar en un excelente destino, atractivo durante toda época del año, sin importar la estación.</p>
								<p>Situada en la zona central de nuestro país, Viña del Mar está dotada de una excelente conectividad, a solo 10 minutos de Valparaíso y 90 minutos de Santiago, incluido el aeropuerto internacional Arturo Merino Benítez.<br />
								Las atracciones que ofrece Viña del mar son extensas. Gracias a la extensa costa y abundantes parques y jardines, la ciudad se torna ideal para la práctica de deportes náuticos y al aire libre. Maratones, regatas, ciclismo, futbol, tenis, golf, Rugby y carreras de caballo, se toman la agenda deportiva durante gran parte del año. Sumado a lo anterior, la ciudad ofrece el Festival Internacional de la canción, realizado todos los meses de febrero en la Quinta Vergara, y el espectáculo pirotécnico de año nuevo junto al mar, con más de 30 kilómetros de extensión a lo largo del borde costero. La cultura tampoco está ausente en nuestra ciudad, el festival internacional de cine, realizado durante los meses de primavera, concita lo mejor de las artes gráficas en nuestra ciudad. Todo lo anterior se suma a una rica y variada gastronomía local, con la posibilidad de degustar los mejores frutos marinos, así como los más prestigiosos vinos chilenos.</p>
								<p>El encanto de Viña del Mar salta a la vista, las arenas doradas de sus playas, el azul de su mar, el verde de sus numerosos parques, y los arreboles de sus atardeceres, convierten a esta ciudad en un lugar de ensueño, ideal para el descanso y esparcimiento.</p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div><!--/container->
	</div><!--/container-->
	<?php include 'include/menu2.php'; ?>
</div><!--/animsition-->
</body>
</html>