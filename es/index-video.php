<?php include 'include/head.php'; ?>
	<title>Domus Mare Boutique & Design Hotel</title><meta name="description" content=""/>
	<style>
		.partners{background-color:#111;text-align:center;padding:20px;margin-top:30px}
		.partners h2{font-size:12px;color:#fff;}
		.partners .logo{display:inline-block;width:100px;height:40px;vertical-align:middle;margin:10px}
		.partners .logo img{width:auto;max-width:100px;height:auto;max-height:40px}
		#play{display:none;background-color:inherit;border:inherit;cursor:pointer;color:#fff;}
		video{text-align:center}
		
		.fixed{position:fixed;-webkit-transition:1s;transition:1s}
		.slideText{display:table;width:100%;}
		.slideText .center{display:table-cell;vertical-align:middle;}
		.fadein{position:relative;width:100%;height:100px;}
		.fadein li{font-size:50px;font-family:'Wire One',sans-serif;}
		.txt{padding:10px;color:#777;background-color:#eee;background-image:url(../img/inicio/pattern-7s31.png);border-top: 2px solid #000;}
		.txt .main{background-color:rgba(255,255,255,0.5);width:100%;max-width:1024px;margin:auto;border-left:1px solid #ccc;border-right:1px solid #ccc;padding:10px;}
		.txt ul{list-style-type:square;padding-left:15px;}
		.txt h2{margin:10px 0;font-size:20px;}
		.txt .cert{position:relative}
		.txt .cert .bureau{display:inline-block;width:200px;height:103px}
		.txt .cert .selloq{display:inline-block;width:171px;height:103px}
		@media only screen and (max-width: 780px) {
			.bgvid,.slideText{display:none;}
		}
	</style>
	<script type="text/javascript" src="<?=$url?>/js/text-slider.js"></script>
	<script>
	$(document).ready(function() {
		//frases aleatorias tipo slider
		$('.fadein').list_ticker({
			speed:2000,
			effect:'fade'
		});
		$(window).resize(function() {
			ancho = $(window).width();
		});		
		var ancho = $(window).width();
		if (ancho>780) $('.menu-bottom').addClass('fixed');
		
		$(window).bind('scroll', function() {
			if (ancho>780){
				if ($(window).scrollTop() > 0) $('.menu-bottom').removeClass('fixed');
				else $('.menu-bottom').addClass('fixed');
			}
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
					<button id="play" onclick="playPause()">Play/Pause</button>
					<video autoplay loop poster="<?=$url;?>/videos/leon.jpg" id="bgvid" class="bgvid"><!--autoplay-->
						<source src="<?=$url;?>/videos/leon.ogv" type="video/ogg">
						<source src="<?=$url;?>/videos/leon.mp4" type="video/mp4">
						<center>Your browser does not support the video tag</center>
					</video>
					<div class="slideText">
						<div class="center">
							<ul class="fadein">
								<li>LUXURY WITH SENSE</li>
								<li>MADE TO CHARM</li>
								<li>BEST IN CLASS</li>
								<li>ELEGANCE MADE IN CHILE</li>
								<li>BOUTIQUE PREMIUM HOTEL</li>
								<li>LIFE IS NOW</li>
							</ul>
						</div>
					</div>
					<div class="txt">
						<div class="main">
							<h1>Hotel Domus Mare</h1>
							<p>Desde su apertura a inicios del 2013, Domus Mare ha sido un ícono en restauración cultural y patrimonial en el cerro Recreo, uno de los sectores más simbólicos y auténticos de Viña del Mar, gracias a toda la herencia cultural de las casonas que lo conforman junto a vistas panorámicas a la bahía del Pacífico.</p>
							<p>El hotel abrió sus puertas en marzo del 2013 con diez hermosas y lujosas habitaciones que lo hacen ser una verdadera casa del mar, tal como su nombre lo indica. Buscando ser un lugar físico que genere circunstancias y experiencias que entregarán todo el lujo de una mansión inglesa del siglo pasado, con todo el confort e innovación que le otorga el paso del tiempo, convirtiéndolo en un ícono que busca ser el facilitador de generar las mejores experiencias en cuanto a relajo y confort junto a la belleza natural del Océano Pacifico a los pies.</p>
							<p>Algunos conceptos icónicos que son la esencia de Domus Mare Boutique & Design Hotel:</p>
							<ul>
								<li>Relajo</li>
								<li>Lujo</li>
								<li>Estilo</li>
								<li>Exclusividad</li>
								<li>Confort</li>
								<li>Prestigio</li>
								<li>Autenticidad</li>
								<li>Trascendencia</li>
								<li>Sentimientos</li>
								<li>Asombro</li>
								<li>Evolución</li>
								<li>Misterio</li>
								<li>Sentidos</li>
							</ul>
							<h2>Calidad Certificada</h2>
							<p>Domus Mare Boutique & Design Hotel, además de ser un ícono de diseño y cultura es Calidad Certificada, ya que el 23 de Febrero de 2014 optamos al sello Q, un sello de calidad turística emitido por SERNATUR (Servicio Nacional del Turísmo) y Bureau Veritas.</p>
							<p>Con dicha certificación nos posicionamos como el Primer Hotel Boutique Premium de Viña del Mar y Valparaíso y el Tercero a nivel nacional.</p>
							<div class="cert">
								<img class="bureau" style="background-image:url(../img/inicio/bureau-veritas.png)">
								<a href="http://www.sernatur.cl/buscador-de-servicios/" target="_blank"><img class="selloq" style="background-image:url(../img/inicio/selloq.png)"></a>
							</div>
							<div class="partners">
								<h2>PARTNERS</h2>	
								<a class="logo" href="http://www.hoteleros.cl/" target="_blank"><img src="<?=$url;?>/img/partners/hoteleros chile.png" /></a>
								<a class="logo" href="http://bodegasre.cl/" target="_blank"><img src="<?=$url;?>/img/partners/Bodegas RE.png" /></a>
								<a class="logo" href="http://www.charmhotelsweb.com/" target="_blank"><img src="<?=$url;?>/img/partners/charm hotels web.png" /></a>
								<a class="logo" href="http://www.carmen.com/" target="_blank"><img src="<?=$url;?>/img/partners/carmen.png" /></a>
								<a class="logo" href="http://cafeteriamusetti.cl/" target="_blank"><img src="<?=$url;?>/img/partners/musseti.png" /></a>
								<a class="logo" href="http://www.mumm.cl/" target="_blank"><img src="<?=$url;?>/img/partners/mumm.png" /></a>
								<a class="logo" href="http://www.havana-club.com/es/cl" target="_blank"><img src="<?=$url;?>/img/partners/habana club.png" /></a>
								<a class="logo" href="http://www.chivas.com/" target="_blank"><img src="<?=$url;?>/img/partners/chivas.png" /></a>
								<a class="logo" href="http://www.absolut.com/" target="_blank"><img src="<?=$url;?>/img/partners/absolut negro.png" /></a>
								<a class="logo" href="http://www.ballantines.com/" target="_blank"><img src="<?=$url;?>/img/partners/ballantines.png" /></a>
								<a class="logo" href="http://cervezaaustral.cl/viajealorigen/" target="_blank"><img src="<?=$url;?>/img/partners/austral.png" /></a>
								<a class="logo" href="http://www.santarita.com/" target="_blank"><img src="<?=$url;?>/img/partners/casa real.png" /></a>
								<a class="logo" href="http://www.dnahotels.com/hotel/chile/valparaiso-region/vina-del-mar/Hotel-Domus-Mare" target="_blank"><img id="p-dna" src="<?=$url;?>/img/partners/dna1.png" /></a>
								<a class="logo" href="https://www.rusticae.cl/hotel/domus-mare-boutique-design-hotel-10319" target="_blank"><img src="<?=$url;?>/img/partners/rusticae2.png" /></a>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div><!--/container-->
		<?php include 'include/menu2.php'; ?>
	</div><!--/container-->
</div><!--/animsition-->
</body>
</html>