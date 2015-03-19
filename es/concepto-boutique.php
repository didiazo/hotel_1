<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<?php require_once '../class/function.php'; $url = curPageURL(); ?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<title>Concepto Boutique</title>
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
	<script type="text/javascript" language="javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=$url?>/js/jquery.animsition.min.js"></script>
	<script type="text/javascript" language="javascript" src="<?=$url?>/js/trunk.js"></script>
	<!--[if lt IE 9]><script src="../js/html5shiv.js"></script><![endif]-->
	<script>
	$(document).ready(function() {
		function txt(){
			var win = $(window).height();
			var bod = $(document).height();
			if (win < bod) {$('.menu-bottom').removeClass('fixed');}
			else $('.menu-bottom').addClass('fixed');
		}
        $(window).resize(function() {
			txt();
		});
		txt();
		$(".more").not('.sec-1 .more').css('display','none');;
		$("h2").click(function() {
			var more = $(this).parents("div:first").find(".more");
			if(more.is(":visible")){ more.hide('1000'); $(this).children().html('&#59236;');}
			else {more.show('1000');$(this).children().html('&#59239;');}
		});
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
		@font-face{font-family:'entypo';src:url('../fonts/entypo/entypo.eot');src:url('../fonts/entypo/entypo.eot?#iefix') format('embedded-opentype'),url('../fonts/entypo/entypo.woff') format('woff'),url('../fonts/entypo/entypo.ttf') format('truetype'),url('../fonts/entypo/entypo.svg#entypo') format('svg');font-weight:normal;font-style:normal;}
		.clearfix:after{content:".";display:block;clear:both;visibility:hidden;line-height:0;height:0;}
		.clearfix{display:inline-block;}
		html[xmlns] .clearfix{display:block;}
		* html .clearfix{height:1%;}
		.responsive{padding:0 !important}
		.fixed{position:fixed;}
		.section{background-size:cover;background-repeat;}
		.sec-1{background-image:url(../img/concepto-boutique/44.jpg);background-color:#eee;background-position:0}
		.sec-2{background-image:url(../img/concepto-boutique/111.jpg);background-color:#eee;background-position:top right}
		.sec-3{background-image:url(../img/concepto-boutique/55.jpg);background-color:#eee;background-position:0}
		.sec-4{background-image:url(../img/concepto-boutique/33.jpg);background-color:#eee;background-position:0 0}
		.sec-5{background-image:url(../img/concepto-boutique/66.jpg);background-color:#eee;background-position:0 0}
		.sec-6{background-image:url(../img/concepto-boutique/77.jpg);background-color:#eee;background-position:0 0}
		.section table{width:100%;max-width:1024px;margin:auto;}
		.td1{width:10%}
		.td2{width:90%;background-color:#fff;color:#444;padding:10px;}
		.ov ul{list-style-type:square;padding-left:15px;}
		a.adjust{cursor:pointer}
		h1{padding:20px 0}
		h2{line-height:2.1em;padding:20px;background:#eee;cursor:pointer;width:100%}
		h2 span{font-family:"entypo";font-size:3em;float:right;line-height:20px;}
		.more{padding:60px 50px;}
		p,ul{font-size:13px}
		@media only screen and (max-width: 780px) {
			.sec-1{padding-top:60px;}
			h2,.more{padding:10px}
		}
	</style>
</head>
<body>
<div class="animsition">
	<?php include 'include/menu.php'; ?>
		
	<div class="section sec-1">
		<table>
			<tr>
				<td class="td1">
					&nbsp;
				</td>
				<td class="td2">
					<div class="ov">
					<h1>CONCEPTO BOUTIQUE</h1>
					<h2 class="clearfix">¿Dónde y Cómo nace el concepto Boutique?</h2>
					<div class="more">
					<p>El Concepto de Hotel Boutique, se podría decir que es más bien nuevo, ya que se remonta a los años 80´ tanto en Europa como América. El origen de su nombre, puede ser explicado, ya que la mayoría de ellos se entablaban en casonas antiguas del siglo XIX, restauradas y en ese entonces, los huéspedes tenían la posibilidad de poder adquirir parte de la decoración que poseían los hoteles, a los cuales acudían.</p>
					<p>El primer Hotel Boutique registrado en plena década de los 80",  fue fundado por Ian Schrager y se encuentra en New York, se llamó Morgans Hotel, logrando éxito rotundo.</p>
					<p>Luego de ello, el concepto inició a expandirse a nivel global, y fue en ese entonces donde Chile también se hizo presente.</p>
					</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div class="section sec-2">
		<table>
			<tr>
				<td class="td2">
					<div class="ov">
					<h2 class="clearfix">¿Qué es un Hotel Boutique en la actualidad?</h2>
					<div class="more">
					<ul>
						<li>Servicio Personalizado: El personal es cercano y busca una cercanía formal y de mucho respeto frente a quién visita el hotel, haciéndolo sentir especial.</li>
						<li>Arquitectura & Diseño: Por lo general, son hoteles entablados en casonas antiguas. Es por ello que muchas veces los espacios son reducidos. Y las habitaciones comúnmente, son diferentes.</li>
						<li>Ubicación: Comúnmente, se establecen en zonas de poco tráfico, barrios exclusivos, residenciales y/o patrimoniales. </li>
						<li>Número de Habitaciones: La idea es mantener el concepto de "Less is More", donde existen pocas habitaciones, pero todas muy bien decoradas y preparadas.</li>
						<!--<li>Exclusividad: Son lugares de poco tráfico, quienes acuden a ellos es porque buscan un ambiente único y especial.</li>-->
						<!--<li>Razón de ser: Es común que el motivo del viaje sea el conocer y pasar tiempo en el Hotel Boutique, elegido. Más que acudir a un destino específico.</li>-->
						<li>Experiencias y sentidos: Quienes prefieren hoteles boutique, es porque buscan detalles y experiencias diferentes, buenas vistas, decoraciones especiales, detalles y curiosidades.</li>
						<li>Estilo y Tendencias: La idea de un Hotel Boutique, es tener un concepto definido, para ello el estilo es fundamental, tener sensibilidad en las tendencias, el arte y el diseño es fundamental. Cada hotel boutique tiene un estilo que lo caracteriza y hace único.</li>
						<!--<li>Emociones y Experiencias: El pasajero de un hotel boutique, es aquel que lo visita, para vivir una experiencia nueva y no sólo porque busca una solución para cubrir su necesidad de alojamiento.</li>-->
					</ul>
					</div>
					</div>
				</td>
				<td class="td1">
					&nbsp;
				</td>
			</tr>
		</table>
	</div>
	<div class="section sec-3">
		<table>
			<tr>
				<td class="td1">
					&nbsp;
				</td>
				<td class="td2">
					<div class="ov">
					<h2 class="clearfix">CALIDAD Y GARANTÍAS</h2>
					<div class="more">
					<p>Sofisticación, diseño único y servicio personalizado. Hospedarse en un hotel boutique es una experiencia singular de la que cada vez más turistas pueden disfrutar a nivel Mundial, y por supuesto, en Chile, donde este tipo de alojamiento está tomando una gran importancia en el sector hotelero.</p>
					<p>Chile es pionero en ello, siendo el segundo país Latinoamericano en normar la calidad de sus hoteles boutique, luego de Colombia.</p>
					<p>La norma chilena fue promulgada por el Ministerio de Economía y aprobada por el Instituto Nacional de Normalización. Luego de fuerte trabajo tanto de la industria turística nacional como el aporte de SERNATUR (Servicio Nacional del Turismo).</p>
					<p>En Chile hay dos tipos de Hoteles Boutique: Los Classic o Premium. Siendo Premium la máxima distinción en cuanto a certificación, a alcanzar.</p>
					</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div class="section sec-4">
		<table>
			<tr>
				<td class="td2">
					<div class="ov">
					<h2 class="clearfix">Un poco de historia:</h2>
					<div class="more">
					<p>“El concepto de hotel boutique nace de la recuperación de las casonas históricas y patrimoniales que se transforman en hoteles y que quieren brindar un servicio de mejor nivel y más personalizado”, Nicolás Mena, director Nacional de Turismo.</p>
					<p>En Chile, los hoteles boutique comenzaron a darse a conocer, en los puntos más turísticos del país: en la añeja ciudad portuaria de Valparaíso, en los parajes patagónicos de Torres del Paine y en el desértico poblado de San Pedro de Atacama.</p>
					<p>También en las zonas vitivinícolas, como lo es Colchagua y en Valle de Casablanca, donde este tipo de alojamientos se han asentado en pequeños rincones con alto valor patrimonial.</p>
					<p>Para cumplir con los requisitos de Hotel Boutique, los hoteles deben tener un sistema de medición del nivel de satisfacción del cliente, tener al menos un colaborador por cada dos camas y sus recepcionistas deben saber hablar idiomas extranjeros.</p>
					<!--<p>Además, el hospedaje debe tener características específicas en cuanto a diseño arquitectónico, gráfico o textil.</p>
					<p>Con estos avances, Chile pretende garantizar a los turistas que, cuando visiten alguno de los hoteles boutique que están floreciendo en el país, encontrarán la comodidad, el glamour y la atención que buscan.</p>-->
					</div>
					</div>
				</td>
				<td class="td1">
					&nbsp;
				</td>
			</tr>
		</table>
	</div>
	<div class="section sec-5">
		<table>
			<tr>
				<td class="td1">
					&nbsp;
				</td>
				<td class="td2">
					<div class="ov">
					<h2 class="clearfix">El caso de Domus Mare Boutique & Design Hotel</h2>
					<div class="more">
					<p>En Marzo del año 2013, en el cerro Recreo-Viña del Mar, nace una nueva historia trascendental para la ciudad y la V Región.  Domus Mare Boutique & Design Hotel abre sus puertas a sus huéspedes en una refinada casona que data del año 1912, al puro estilo Clásico Inglés.</p>
					<p>Tras 5 años de restauración, se logró dar inicio a su nuevo emprendimiento con un lujoso hotel cuyo concepto es único e inigualable en la región. Cuenta con 10 habitaciones de lujo, donde su arquitectura y diseño vislumbran en cada detalle de sus instalaciones, todo esto acompañado de un calificado staff,  buscando siempre mejorar en pos de un servicio de calidad y confortabilidad. Poniendo especial énfasis al servicio personalizado, con foco especial en que todo es por y para el huésped. </p>
					<p>En Julio de 2014, es certificado y premiado como el Primer Hotel Boutique Premium, con el sello de Calidad Turística, de la ciudad de Viña del Mar y Valparaíso, y el 3° a nivel Nacional. </p>
					<p>El Director Nacional, Nicolás Mena, destacó: la importancia de este distintivo para la industria “Esto es un gran avance. Antes no podíamos identificar a los alojamientos que realmente son hoteles boutique y cualquiera podía decir que lo era. Con la creación de esta norma, esto cambió. Ahora sí se pueden registrar, de modo de ser visibles en la oferta formal y oficial del país, la que está disponible para que todos los turistas la conozcan, lo que pueden hacer en el Buscador de los servicios turísticos de la página web www.sernatur.cl”</p>
					<p>Por su parte la alcaldesa de Viña del Mar, Virginia Reginato, felicitó a los dueños y gestores de este hotel y destacó que “Desde el tradicional barrio de Recreo aporta distinción, calidad y buen servicio a la oferta hotelera de Viña del Mar. </p>
					</div>
					</div>
				</td>
			</tr>
		</table>
	</div>
	<div class="section sec-6">
		<table>
			<tr>
				<td class="td2">
					<div class="ov">
					<h2 class="clearfix">El servicio tailor-made entregado al huésped</h2>
					<div class="more">
					<p>Una de las características y razón de ser de Domus Mare Boutique & Design Hotel es generar experiencias de hospitalidad cómodas y cálidas para que todo aquel que visita este establecimiento se sienta como en su casa, además de ubicarse justo frente al mar, con una vista inigualable de la bahía de Viña del Mar y Valparaíso. Se ubica en uno de los barrios residenciales más reconocidos de Viña del Mar, Recreo y se origina en una casona de Principios de 1900”.</p>
					<p>Es por esto, que todo está pensado a la medida del cliente, donde su necesidad o requerimiento se torna una prioridad para el personal, entregando al momento de manera oportuna lo solicitado.</p>
					<p>El cuidado de los detalles situado en todo el hotel, destaca su estilo, donde la estética y vanguardia definen la autenticidad de Domus Mare Boutique & Design Hotel. El espacio reducido en algunos rincones de la casona, el cariño del personal, el atardecer frente al mar, la brisa marina en las mañanas, el ambiente hogareño en el desayuno junto a sus preparaciones caseras, hace de la estadía una experiencia única e inigualable.</p>
					</div>
					</div>
				</td>
				<td class="td1">
					&nbsp;
				</td>
			</tr>
		</table>
	</div>	
	<?php include 'include/menu2.php'; ?>
</div>
</body>
</html>