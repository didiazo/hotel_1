<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<?php require_once '../class/function.php'; $url = curPageURL(); ?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<title>Habitaciones</title>
	<link rel="stylesheet" type="text/css" href="<?=$url?>/css/domus.css" media="all" />
	<link rel="shortcut icon" href="<?=$url?>/img/favicons/favicon.ico">
	<meta name="description" content=""/>
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
	<!--<script type="text/javascript" language="javascript" src="<?=$url?>/js/jquery-1.10.2.min.js"></script>-->
	<script type="text/javascript" language="javascript" src="<?=$url?>/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=$url?>/js/trunk.js"></script>
	<!--[if lt IE 9]><script src="../js/html5shiv.js"></script><![endif]-->
	<script>
	$(document).ready(function() {
		$(".slideshow > div:gt(0)").hide();

		setInterval(function() {
			$('.slideshow > div:first')
			.fadeOut(1000)
			.next()
			.fadeIn(1000)
			.end()
			.appendTo('.slideshow');
		}, 5000);
		
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
	});
	</script>
	<style>
		html,body,.body-section,.izq,.animsition,.container,.content,.responsive,.fadein{height:100%;margin:0;padding:0}
		
		.menu-bottom{position:fixed}
		.izq{position:absolute;left:0;top:0;right:50%;height:100%;z-index:0;padding-top:125px;}
		.der{position:absolute;left:50%;right:0;top:0;z-index:0;height:auto;padding-top:125px;padding-bottom:23px;background:#eee;font-size:0}
		.img{position:relative;width:100%;height:100%}
		.img img{position:absolute;top:0;left:0;background-size:cover;width:100%;height:100%;background-position:0 center;}
		
		.slideshow{position:relative;width:100%;height:100%}
		.slideshow div{position:fixed;top:0;left:0;right:0;bottom:0;}
		.slideshow div{background-size:cover;background-position:0 center;width:50%;height:100%}
		
		.izq .txt{position:fixed;width:50%;top:50%;padding:10px 20px;background-color:rgba(0,0,0,0.3);transform:translateY(-50%)}
		.der .hab{padding:15px 10px;background:#fff;color:#444;width:50%;display:inline-block;vertical-align:top;box-sizing:border-box;}
		h3{margin:10px 0;font-size:15px}
		.der .img,.der img{height:200px}
		.hab ul{list-style-type:square;padding-left:20px}
		.body-section{background-color:#eee}
		.view{position:absolute;right:0;top:0;width:20px;height:20px;background-color:rgba(0,0,0,0.5);z-index:10;background-image:url(../img/icons/sprites.png);background-position:-120px -3px}
			
		@media only screen and (max-width: 780px) {
			.slideshow div,.izq .txt{position:absolute}
			html,body, body > div{height:auto}
			.izq,.der,.menu-bottom{position:inherit;padding:0}
			.izq{position:relative;height:300px;width:100%}
			.slideshow div{height:300px;width:100%}
			.izq .txt{top:60px;transform:none;width:100%}
			.hab{padding:10px}
			.der .img,.der img{height:200px;z-index:10}
			.hab .txt{padding-top:10px;}
			.hab h3{text-align:center;}
		}
		@media only screen and (max-width: 480px){
			.der .hab{display:block;width:100%}
		}
		@media only screen and (max-width: 300px){
			.izq .txt p:nth-child(2){display:none}
		}
	</style>
</head>
<body>
<div class="animsition">
	<div class="container">
		<?php include 'include/menu.php'; ?>
		<div class="content slide">
			<ul class="responsive slide">
				<li class="body-section animate">
					<div class="izq load">
						<div class="slideshow">
							<div class="bg" style="background-image:url(../img/rooms/2.jpg)" ></div>
							<div class="bg bg2" style="background-image:url(../img/rooms/3.jpg)" ></div>
						</div>
						<div class="txt">
							<p>El hotel cuenta con diez habitaciones, todas diferentes dado que Domus Mare, nace en una casona de inicios de siglo. Su esencia y estilo viven hasta ahora. Cada una de las habitaciones cuenta con los mismos estándares en cuanto a diseño, lujo y estilo.</p>
							<p>Domus Mare, cuenta con seis categorías, que principalmente varían en cuanto a dimensiones y tipo de vista. Todas las habitaciones se encuentran equipadas para brindarte la mejor experiencia de lujo, relajo y confort. Buscando sorprenderte en cada detalle.</p>
						</div>
					</div>
					<div class="der load">
						<div class="hab">
							<div class="img">
								<a class="view" href="<?=$url;?>/es/habitacion/superior"></a>
								<a href="<?=$url;?>/es/habitacion/superior">
									<img class="bg" style="background-image:url(../img/rooms/superior/2.jpg)" />
								</a>
							</div>
							<div class="txt">
								<div class="">
									<a href="<?=$url;?>/es/habitacion/superior"><h3>SUPERIOR</h3></a>
									<p>Si buscas relajarte y disfrutar. Házlo mientras tomas un baño en el jacuzzi de ésta hermosa habitación.</p>
									<p>Habitación de alrededor de 22 m2 más 5,2 m2 de balcón aproximadamente, con cama king size, vista lateral y parcial a la bahía:</p>
									<ul>
										<li>Jacuzzi interior</li>
										<li>Pequeño balcón privado</li>
										<li>Teléfono</li>
										<li>TV pantalla plana 32’’ HD con cable</li>
										<li>Caja de seguridad</li>
										<li>Aire acondicionado</li>
										<li>Calefacción</li>
										<li>Secador de pelo</li>
										<li>Sábanas y Bedding de 300 hilos</li>
										<li>Mobiliario en maderas de roble y cuero</li>
										<li>Grifería de cobre o bronce en banitorios</li>
										<li>Baño de mármol</li>
										<li>Acceso Internet WIFI gratuito</li>
										<li>Estacionamiento gratuito (sujeto a disponibilidad)</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="hab">
							<div class="img">
								<a class="view" href="<?=$url;?>/es/habitacion/premium-vista.php"></a>
								<a href="<?=$url;?>/es/habitacion/premium-vista">
									<img class="bg" style="background-image:url(../img/rooms/premium-vista/2.jpg)" />
								</a>
							</div>
							<div class="txt">
								<div class="">
									<a href="<?=$url;?>/es/habitacion/premium-vista"><h3>PREMIUM VISTA</h3></a>
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
							</div>
						</div>
						<div class="hab">
							<div class="img">
								<a class="view" href="<?=$url;?>/es/habitacion/premium-vista-al-mar"></a>
								<a href="<?=$url;?>/es/habitacion/premium-vista-al-mar">
									<img class="bg" style="background-image:url(../img/rooms/premium-vista-al-mar/4.jpg)" />
								</a>
							</div>
							<div class="txt">
								<div class="">
									<a href="<?=$url;?>/es/habitacion/premium-vista-al-mar"><h3>PREMIUM VISTA AL MAR</h3></a>
									<p>Iluminadas y cálidas habitaciones, con jacuzzi para gozar de un merecido relajo. Rayos de sol que entran por la ventana, junto a una hermosa vista a la bahía.</p>
									<p>Habitación de alrededor de 21 m2 y 11 m2 de terraza privada aproximadamente, con cama king size, vista a la bahía:</p>
									<ul>
										<li>Escritorio</li>
										<li>Terraza Privada</li>
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
										<li>Grifería de cobre o bronce en vanitorios.</li>
										<li>Mesa en terraza y silla.</li>
										<li>Baño de mármol.</li>
										<li>Acceso Internet WIFI gratuito.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="hab">
							<div class="img">
								<a class="view" href="<?=$url;?>/es/habitacion/premium-deluxe-vista-al-mar"></a>
								<a href="<?=$url;?>/es/habitacion/premium-deluxe-vista-al-mar">
									<img class="bg" style="background-image:url(../img/rooms/premium-deluxe-vista-al-mar/1.jpg)" />
								</a>
							</div>
							<div class="txt">
								<div class="">
									<a href="<?=$url;?>/es/habitacion/premium-deluxe-vista-al-mar"><h3>PREMIUM DELUXE VISTA AL MAR</h3></a>
									<p>Para amantes de la navegación y el Océano. Habitaciones en mansarda, con auténticas vigas de pino oregón, que te harán sentir como navegante de un galeón, en medio de la bahía.</p>
									<p>Habitación de alrededor de 23 m2 y 4 m2 aproximadamente de terraza privada con cama king size y vista frontal a la bahía:</p>
									<ul>
										<li>Escritorio</li>
										<li>Terraza Privada</li>
										<li>Jacuzzi interior.</li>
										<li>Teléfono.</li>
										<li>TV pantalla plana 32'' HD con cable.</li>
										<li>Caja de seguridad.</li>
										<li>Aire acondicionado.</li>
										<li>Calefacción.</li>
										<li>Secador de pelo.</li>
										<li>Sábanas y Bedding de 300 hilos.</li>
										<li>Mobiliario en maderas de roble y cuero.</li>
										<li>Banqueta de cuero</li>
										<li>Grifería de cobre o bronce en vanitorios.</li>
										<li>Mesa en terraza y silla.</li>
										<li>Baño de ónix.</li>
										<li>Acceso Internet WIFI gratuito.</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="hab">
							<div class="img">
								<a class="view" href="<?=$url;?>/es/habitacion/superior-premium-deluxe-vista-al-mar"></a>
								<a href="<?=$url;?>/es/habitacion/superior-premium-deluxe-vista-al-mar">
									<img class="bg" style="background-image:url(../img/rooms/superior-premium-deluxe-vista-al-mar/1-edit.jpg)" />
								</a>
							</div>
							<div class="txt">
								<div class="">
									<a href="<?=$url;?>/es/habitacion/superior-premium-deluxe-vista-al-mar"><h3>SUPERIOR PREMIUM DELUXE VISTA AL MAR</h3></a>
									<p>Para amantes del día y la noche. Las terrazas de éstas habitaciones te sorprenderán en todo momento, pudiendo observar en primer plano el hermoso vuelo de gaviotas y puestas de sol. Hasta la luna y las estrellas.</p>
									<p>Habitación de alrededor 18 m2 y 15 m2 aproximadamente de terraza privada con cama king size y vista frontal a la bahía:</p>
									<ul>
										<li>Mesa y silla.</li>
										<li>Ducha Hidromasaje.</li>
										<li>Terraza Privada.</li>
										<li>Jacuzzi en terraza.</li>
										<li>Cascada de agua en terraza.</li>
										<li>Teléfono.</li>
										<li>TV pantalla plana 32'' HD con cable.</li>
										<li>Caja de seguridad.</li>
										<li>Aire acondicionado.</li>
										<li>Calefacción.</li>
										<li>Secador de pelo.</li>
										<li>Sábanas y Bedding de 300 hilos.</li>
										<li>Mobiliario en maderas de roble y cuero.</li>
										<li>Grifería de cobre o bronce en vanitorios.</li>
										<li>Mesa en terraza y silla.</li>
										<li>Baño de ónix.</li>
										<li>Acceso Internet WIFI gratuito.</li>
										<li>Estacionamiento gratuito (sujeto a disponibilidad).</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="hab">
							<div class="img">
								<a class="view" href="<?=$url;?>/es/habitacion/domus-mare-vista-al-mar"></a>
								<a href="<?=$url;?>/es/habitacion/domus-mare-vista-al-mar">
									<img class="bg" style="background-image:url(../img/rooms/domus-mare-vista-al-mar/4.jpg)" />
								</a>
							</div>
							<div class="txt">
								<div class="">
									<a href="<?=$url;?>/es/habitacion/domus-mare-vista-al-mar"><h3>DOMUS MARE VISTA AL MAR</h3></a>
									<p>Espacio y lugar indicado para asombrarse con el Pacífico a los pies. Mientras gozas de un rico jacuzzi con el sonido de una relajante cascada de agua. Ideal para apreciar puestas de sol y dejarse llevar, viviendo el momento.</p>
									<p>Habitación de alrededor de 20 m2 y terraza privada de 17m2 aproximadamente, con cama king size y vista frontal a la bahía:</p>
									<ul>
										<li>Escritorio.</li>
										<li>Terraza Privada.</li>
										<li>Jacuzzi interior.</li>
										<li>Jacuzzi en terraza.</li>
										<li>Cascada de agua en terraza.</li>
										<li>Jardineras.</li>
										<li>Teléfono.</li>
										<li>TV pantalla plana 32'' HD con cable.</li>
										<li>Caja de seguridad.</li>
										<li>Aire acondicionado.</li>
										<li>Calefacción.</li>
										<li>Secador de pelo.</li>
										<li>Sábanas y Bedding de 300 hilos.</li>
										<li>Mobiliario en maderas de roble y cuero.</li>
										<li>Banqueta de cuero.</li>
										<li>Grifería de cobre o bronce en vanitorios.</li>
										<li>Mesa en terraza y silla.</li>
										<li>Baño de mármol u ónix.</li>
										<li>Acceso Internet WIFI gratuito.</li>
										<li>Estacionamiento gratuito (sujeto a disponibilidad).</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div><!--/content-->
	</div><!--/container-->
	<?php include 'include/menu2.php'; ?>
</div><!--/animsition-->
</body>
</html>