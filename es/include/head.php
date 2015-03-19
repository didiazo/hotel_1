<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
<?php require_once '../class/function.php'; $url = curPageURL(); ?>
<meta charset="UTF-8" />
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="stylesheet" type="text/css" href="<?=$url?>/css/domus.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?=$url?>/css/animsition.min.css">
<script type="text/javascript" language="javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" language="javascript" src="<?=$url?>/js/jquery.animsition.min.js"></script>
<!--[if lt IE 9]><script src="<?=$url?>/js/html5shiv.js"></script><![endif]-->

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
		//var altoVentana = $( window ).height();
		//$('.body-min').css('min-height',altoVentana-36);
	});
	</script>