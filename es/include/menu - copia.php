<header class="slide">
	<ul id="navToggle" class="burger slide">
		<li></li><li></li><li></li>
	</ul>
</header>
<nav class="menu slide">
	<ul>
		<li><div class="logo"><img src="<?=$url?>/img/logo.png" alt="domusmare" /></div></li>
		<li><a href="<?=$url;?>/es/index">HOTEL</a></li>
		<li class="sub">
			<a href="<?=$url;?>/es/the-world-of-domus-mare">THE WORLD OF DOMUS MARE</a>
			<ul class="submenu">
				<li><a href="<?=$url;?>/es/mejores-momentos-de-nuestra-historia">Mejores momentos de nuestra historia</a></li>
				<li><a href="<?=$url;?>/es/domus-club">Domus Club</a></li>
			</ul>
		</li>
		<li><a href="<?=$url;?>/es/sorpresas">SORPRESAS</a></li>
		<li><a href="<?=$url;?>/es/habitaciones">HABITACIONES</a></li>
		<li class="sub">
			<a href="<?=$url;?>/es/concepto-boutique">CONCEPTO BOUTIQUE</a>
			<ul class="submenu">
				<li><a href="<?=$url;?>/es/luxury-experiences">LUXURY EXPERIENCES</a></li>
				<li><a href="<?=$url;?>/es/luxury-trends">LUXURY TRENDS</a></li>
			</ul>
		</li>
		<li><a href="<?=$url;?>/es/reservas-y-tarifas">RESERVAS Y TARIFAS</a></li>
		<li><a href="<?=$url;?>/es/contacto">CONTACTO</a></li>
	</ul>
	<ul class="top">
		<li><a class="tiem" title="Tiempo" href="#" target="_blank"></a></li>
		<li><a class="post" title="Postal" href="#" target="_blank"></a></li>
		<li><a class="face" title="facebook" href="#" target="_blank"></a></li>
		<li><a class="twit" title="twitter" href="#" target="_blank"></a></li>
		<li class="es"><a title="Español" href="#" target="_blank">ES</a></li>
		<li class="en"><a title="English" href="#" target="_blank">EN</a></li>
		<li class="selloq"><a title="Sello" href="#" target="_blank"><img src="<?=$url?>/img/icons/selloq.png" /></a></li>
	</ul>
</nav>
<script>
	$(".sub").hover(function(){$(this).children("ul").show()},function(){$(this).children("ul").hide()})
</script>