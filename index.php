<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<?php require_once 'class/function.php'; $url = curPageURL(); ?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<link rel="alternate" hreflang="es" href="/es" />
	<link rel="alternate" hreflang="en" href="/en" />
	<title>Domus Mare Boutique & Design Hotel</title>
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="description" content="Primer Hotel Boutique Premium de viña del mar y Valparaíso, Chile."/>
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
	<style>
		html,body,.index,.hov{height:100%;margin:0;padding:0}
		.header{position:absolute;top:0;width:100%;height:5px;background-color:#111;z-index:10}
		.index{display:table;background-image:url('img/index.jpg');background-size:cover;background-repeat:no-repeat;width:100%;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}
		.hov{display:table-cell;height:100%;vertical-align:middle;box-sizing:border-box;width:50%;background-color:#fff;text-align:center;text-decoration:none;color:#777;font-size:13px;opacity:0.9;filter:alpha(opacity=90);-webkit-transition:opacity 0.5s ease-in-out;-moz-transition:opacity 0.5s ease-in-out;transition:opacity 0.5s ease-in-out;}
		.hov:hover{opacity:0;filter:alpha(opacity=0)}
		.footer{position:absolute;bottom:0;width:100%;height:35px;background-color:#111;text-align:center;padding-top:5px;background-image:url('img/logo-domus-mare-grey.png');background-size:30px 30px;background-repeat:no-repeat;background-position:center}
	</style>
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
	});
	</script>
</head>
<body>
	<div class="header"></div>
	<div class="index">
		<a class="hov" href="es/">ESPAÑOL</a>
		<a class="hov" href="#en">ENGLISH</a>
	</div>
	<div class="footer"></div>
</body>
</html>