<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<?php require_once '../class/function.php'; $url = curPageURL(); ?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<title>Sorpresas</title>
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
	});
	</script>
	<style>
	header{position:inherit}
	.container{background-color:inherit}
	.menu-bottom{position:fixed}
	.txt{margin-top:130px;padding:10px}
	.left{display:table-cell;width:250px;vertical-align:top;background-color:rgba(0,0,0,0.2);height:auto;padding:10px;-webkit-transition:1s;transition:1s;}
	.left:hover{background-color:rgba(0,0,0,0.7)}
	.right{display:table-cell;vertical-align:middle;}
	.box{display:inline-block;vertical-align:middle;width:200px;height:200px;margin:10px 10px;}
	.box img{width:100%;height:100%;opacity:0.5;-webkit-box-shadow:0px 0px 5px 0px rgba(0, 0, 0, 0);-moz-box-shadow:0px 0px 5px 0px rgba(0, 0, 0, 0);box-shadow:0px 0px 5px 0px rgba(0, 0, 0, 0);-webkit-transition:1s;transition:1s;}
	.box img:hover{opacity:1;-webkit-box-shadow:0px 0px 5px 0px rgba(0, 0, 0, 1);-moz-box-shadow:0px 0px 5px 0px rgba(0, 0, 0, 1);box-shadow:0px 0px 5px 0px rgba(0, 0, 0, 1);}
	.txt h1{margin:0}
	.txt h2{margin:10px 0}
	.txt ul{list-style-type:square;padding-left:15px;}
	@media screen and (max-height: 670px){
		html,body,.body-section,.animsition,.container,.content,.responsive{height:auto;overflow:auto}
		.menu-bottom{position:inherit}
	}
	@media only screen and (max-width: 780px) {
		.txt{margin-top:0;}
		.box{width:45%;max-width:200px;height:auto}
	}
	@media only screen and (max-width: 500px) {
		.box{width:100%;max-width:100%;height:auto}
		.box img{width:auto;max-width:100%;height:auto}
		.left,.right{display:block;width:100%;}
		.right{text-align:center}
	}
	</style>
</head>
<body>
<div class="animsition">
	<div class="container">
		<?php include 'include/menu.php'; ?>
		<div class="content slide">
			<ul class="responsive slide">
				<li class="body-section">
					<div class="txt">
						<div class="left">
							<h1>SORPRESAS</h1>
							<h2>SERVICIOS<h2>
							<p>Domus Mare significa Casa del Mar y en honor a su nombre es que contamos con una serie de servicios a modo de complementar su estadía en cada detalle que se pueda suscitar, haciendo de esta una experiencia inolvidable.</p>
							<ul>
								<li>Cajas de seguridad</li><li>Piano</li><li>Bar</li><li>Terrazas</li><li>Juegos de mesa</li><li>Wifi de cortesía</li><li>Jacuzzis</li><li>Estacionamiento gratuito</li><li>Desayuno</li>
							</ul>
							<h2>PROGRAMAS</h2>
							<p>Domus Mare en su afan de Satisfacer todas tus necesidades ha creado diversos Programas especializados para que vivas tus mejores experiencias y momentos junto a nosotros y la mejor vista al Océano Pacífico.</p>
						</div>
						<div class="right">
							<a class="box box-1" href="#"><img src="<?=$url;?>/img/servicios/box/gift-box.jpg"></a>
							<a class="box box-2" href="#"><img src="<?=$url;?>/img/servicios/box/novios-box.jpg"></a>
							<a class="box box-3" href="#"><img src="<?=$url;?>/img/servicios/box/gift-card-box.jpg"></a>
							<a class="box box-4" href="#"><img src="<?=$url;?>/img/servicios/box/escapadas-abril-2015-box.jpg"></a>
						</div>
					</div>
				</li>
			</ul>
		</div><!--/container-->
		<?php include 'include/menu2.php'; ?>
	</div><!--/container-->
</div><!--/animsition-->
<script src="<?=$url;?>/js/jquery.backstretch.min.js"></script>
<script>
	$.backstretch([
	  "<?=$url;?>/img/servicios/1.jpg",
	  "<?=$url;?>/img/servicios/2.jpg",
	  "<?=$url;?>/img/servicios/3.jpg"
	],{
		fade: 750,
		duration: 4000
	});
</script>
</body>
</html>