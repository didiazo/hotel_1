<?php
session_start();
$_SESSION = array();
include("../class/captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
//$_SESSION['captcha']['code'];
?>
<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<?php require_once '../class/function.php'; $url = curPageURL(); ?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<title>Contacto Domus Mare</title>
	<link rel="stylesheet" type="text/css" href="<?=$url?>/css/domus2.css" media="all" />
	<style>
		.menu-bottom{position:fixed}
		#map{width:100%;height:10px;position:fixed !important;}
		#map img{max-width:none;}
		.main{background-color:#fff;margin-left:100px;width:350px;color:#444;padding:40px 10px;position:fixed;z-index:10}
		.main form{border-right:1px solid #eaeaea;border-top:1px solid #eaeaea;padding-top:5px;}
		.main table{width:100%}
		.main td{vertical-align:middle;padding:2px;}
		.main input,.main textarea{width:200px;resize:vertical;max-height:200px;border:1px solid #ccc;padding:0 3px;margin:2px 0;}
		.main td:nth-child(1){width:95px;}
		.main img{width:200px;height:40px;border:1px solid #ccc}
		.main .submit{background-color:#AD0303;color:#fff;padding:3px;border:none;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;cursor:pointer;-webkit-transition:1s;transition:1s;}
		.main .submit:hover{background-color:#CF0000}
		.respuesta{padding-top:10px;}
		.verde{background-color:#3fb283;color:#fff;padding:7px}
		.rojo{background-color:#b23f3f;color:#fff;padding:7px}
		@media only screen and (max-width: 780px){
			.content{margin-top:60px;}
			.responsive{padding:0}
			#map{position:relative !important}
			.main{width:100%}
			.menu-bottom{position:relative}
			.main form{border:none}
		}
		@media only screen and (max-width: 400px){
			.main{margin-left:0;position:relative}
			.main input,.main textarea{width:100%}
		}
	</style>
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
	<script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=$url?>/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=$url?>/js/trunk.js"></script>
	<!--[if lt IE 9]><script src="../js/html5shiv.js"></script><![endif]-->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		function altomapa() {
			var alto = $(window).height();
			var ancho = $(window).width();
			if(ancho<780) alto-=60;
			else if(ancho<400) alto=(alto*60)/100;
			else alto-=135;
			$('#map').css('height',alto);
		}
		altomapa();
		$(window).resize(function() {
			altomapa();
			init();
		});
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
		$('.selloq img').hover(function(){
			$('.selloq a').css('margin-right','50px');
		}, function() {
			$('.selloq a').css('margin-right','30px');
		});
		google.maps.event.addDomListener(window, 'load', init);
		var myLatlng = new google.maps.LatLng(-33.026631,-71.573728);
		function init() {
			var mapOptions = {
				zoom: 14,
				center: myLatlng,
				styles: [{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#acbcc9"}]},{"featureType":"landscape","stylers":[{"color":"#f2e5d4"}]},{"featureType":"road.highway","elementType":"geometry","stylers":[{"color":"#c5c6c6"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#e4d7c6"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#fbfaf7"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#c5dac6"}]},{"featureType":"administrative","stylers":[{"visibility":"on"},{"lightness":33}]},{"featureType":"road"},{"featureType":"poi.park","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":20}]},{},{"featureType":"road","stylers":[{"lightness":20}]}]
			};
			var mapElement = document.getElementById('map');
			var map = new google.maps.Map(mapElement, mapOptions);
			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title: 'Domus Mare Boutique & Design Hotel'
			});
		}
		
		$('.form').on('submit',function(e) {
			e.preventDefault();
			var url = "submit.php";
			$.ajax({
			type: "POST",
			url: url,
			data: $(".form").serialize(),
			success: function(data){
			   $(".respuesta").html(data);
			   if(data=='<span class="verde">Mensaje Enviado</span>') $(".form")[0].reset();
			}
			});
			return false;
		});
	});
	function validarEmail(mail){
		expr = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if (expr.test(mail)) return true;
		else {
			alert('¡Email inválido!');
			return false;
		}
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
					<div class="main">
						<h1>Contacto</h1>
						<form class="form" action="" method="post">
							<i><span class='i'>&#42;</span> Campos requeridos</i><br /><br />
							<table>
							<tr>
								<td><span class='i'>&#42;</span> Nombre</td>
								<td><input type="text" name="nombre" placeholder="nombre y apellido" required /></td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span> Email</td>
								<td><input type="email" name="email" placeholder="ejemplo@mail.com" required onchange="validarEmail(this.value);" /></td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span> Mensaje</td>
								<td><textarea name="mensaje" required></textarea></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<?php echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="verificación">'; ?>
								</td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span> Captcha:</td>
								<td><input type="text" name="verificar" required /></td>
							</tr>
							<tr>
								<td><input type="hidden" name="formulario" value="contacto" /></td>
								<td><input type="submit" name="submit" class="submit" value="Enviar"></td>
							</tr>
							<tr>
								<td colspan="2"><div class="respuesta"></div></td>
							</tr>
							</table>
						</form>
					</div>
					<div id="map"></div>
				</li>
			</ul>
		</div><!--/container-->
		<?php include 'include/menu2.php'; ?>
	</div><!--/container-->
</div><!--/animsition-->
</script>
</body>
</html>