<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<?php require_once '../../class/function.php'; $url = curPageURL(); ?>
	<meta charset="UTF-8" />
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<link rel="stylesheet" type="text/css" href="<?=$url?>/css/domus.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=$url;?>/css/slideshow.css" />
	<link rel="stylesheet" type="text/css" href="<?=$url?>/css/animsition.min.css">
	<script type="text/javascript" language="javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=$url?>/js/jquery.animsition.min.js"></script>
	<!--[if lt IE 9]><script src="../js/html5shiv.js"></script><![endif]-->
	<title>Habitación Premium Vista</title>
	<script>
	$(document).ready(function() {
		$(".animsition").animsition({
		inClass               : 'fade-in',
		outClass              : 'fade-out',
		inDuration            : 1500,
		outDuration           : 800,
		linkElement           : '.animsition-link',
		touchSupport          : true,
		loading               : true,
		loadingParentElement  : 'body', //animsition wrapper element
		loadingClass          : 'animsition-loading',
		unSupportCss          : ['animation-duration','-webkit-animation-duration','-o-animation-duration']
		});
		cbpBGSlideshow.init();
	});
	</script>
	<script src="<?=$url;?>/js/modernizr.custom.js"></script>
	<style>
		.menu-bottom{position:fixed}
		.txt,form{width:300px;max-width:100%;background-color:rgba(0,0,0,0.5);padding:10px;position:relative}
		.txt ul{list-style:inherit;list-style-type:circle;font-family:arial;font-size:13px;padding-left: 15px;}
		form{text-align:center;border-bottom:1px solid #111;border-top:1px solid #111;}
		form input{background-color:#AD0303;color:#fff;padding:5px 20px;border:none;-webkit-transition:1s;transition:1s;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;}
		form input:hover{background-color:#CF0000}
		form a{position:absolute;left:0;cursor:pointer;text-decoration:inherit !important;}
		form a:before{width:30px;text-align:center;font-family:'entypo';speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;line-height:30px;font-size:30px;color:#fff;-webkit-font-smoothing:antialiased;	opacity:0.5;}
		.formhab a.cbp-binext{right:0;left:inherit}
		@media screen and (max-height: 635px){
			html,body,.body-section,.animsition,.container,.content,.responsive{height:auto;overflow:auto}
			.menu-bottom{position:inherit}
		}
		@media only screen and (max-width: 900px) {
			.cbp-bicontrols{display:none}
		}
		@media only screen and (max-width: 500px) {
			html,body,.body-section,.animsition,.container,.content,.responsive{height:auto;margin:0;padding:0;overflow:auto}
			.cbp-bicontrols{display:block;top:230px;position:absolute;}
			.menu-bottom,.cbp-bislideshow{position:relative !important}
			.cbp-bislideshow{height:300px;overflow:hidden}
			.txt,form{width:100%}
		}
	</style>
</head>
<body>
<div class="animsition">
	<?php include '../include/menu.php'; ?>
	<ul id="cbp-bislideshow" class="cbp-bislideshow">
		<li><img src="<?=$url;?>/img/rooms/premium-vista/1.jpg" alt="image01"/></li>
		<li><img src="<?=$url;?>/img/rooms/premium-vista/2.jpg" alt="image02"/></li>
		<li><img src="<?=$url;?>/img/rooms/premium-vista/3.jpg" alt="image03"/></li>
		<li><img src="<?=$url;?>/img/rooms/premium-vista/4.jpg" alt="image04"/></li>
	</ul>
	<div id="cbp-bicontrols" class="cbp-bicontrols">
		<span class="cbp-biprev"></span>
		<span class="cbp-bipause"></span>
		<span class="cbp-binext"></span>
	</div>
	
	<div class="txt">
		<h1>PREMIUM VISTA</h1>
		<p>Invierno o verano, día o noche, pasa a segundo plano para experimentar el relajo y vivir la magia de éstas peculiares y hermosas habitaciones.</p>
		<p>Habitación de alrededor de 17 a 22 m2 con terraza de 4 m2 aproximadamente, con cama king size, vista lateral a la bahía:</p>
		<ul>
			<li>Escritorio</li>
			<li>Balcón Privado</li>
			<li>Jacuzzi interior.</li>
			<li>Teléfono.</li>
			<li>TV pantalla plana 32'' HD con cable.</li>
			<li>Caja de seguridad.</li>
			<li>Aire acondicionado.</li>
			<li>Calefacción.</li>
			<li>Secador de pelo.</li>
			<li>Sábanas y Bedding de 300 hilos.</li>
			<li>Mobiliario en maderas de roble y cuero.</li>
			<li>Grifería de cobre o bronce en banitorios.</li>
			<li>Baño de mármol u ónix.</li>
			<li>Acceso Internet WIFI gratuito.</li>
		</ul>
	</div>
	<form class="formhab" action="<?=$url;?>/es/tarifas-reservas.php" method="get">
		<a href="<?=$url;?>/es/habitacion/superior" class="cbp-biprev"></a>
		<input type="hidden" name="room" value="2" />
		<input type="submit" value="Reservar" />
		<a href="<?=$url;?>/es/habitacion/premium-vista-al-mar" class="cbp-binext"></a>
	</form>
	<?php include '../include/menu2.php'; ?>
</div>
<script src="<?=$url;?>/js/jquery.imagesloaded.min.js"></script>
<script src="<?=$url;?>/js/cbpBGSlideshow.min.js"></script>
</body>
</html>