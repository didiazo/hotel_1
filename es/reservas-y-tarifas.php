<?php
session_start();
$_SESSION = array();
include("../class/captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
require_once '../class/fecha.php';
$res = fecha::mostrarFecha();
$x = mysqli_fetch_array($res);
$minimaBaja = date('d-m-Y', strtotime($x[1]));
$maximaBaja = date('d-m-Y', strtotime($x[2]));
$minimaAlta = date('d-m-Y', strtotime($x[3]));
$maximaAlta = date('d-m-Y', strtotime($x[4]));
if($maximaBaja <= date('d-m-Y')) {$fecha_limite = $maximaBaja; $tbaja = false;}
else {$fecha_limite = $maximaAlta; $tbaja = true;}
require_once '../class/habitaciones.php';
$h = habitaciones::listarHabitaciones();
while($x = mysqli_fetch_array($h)){
	$tipo[] = $x[1];
	$valor[] = number_format($x[2], 0, '', '.');
	$valorUSD[] = number_format($x[4], 0, '', '.');
	$valor2[] = number_format($x[6], 0, '', '.');
	$valorUSD2[] = number_format($x[8], 0, '', '.');
}
if(isset($_GET['room'])){
	$hab = $_GET['room']-1;
}
else $hab = -1;
?>
<!DOCTYPE html>
<html dir="ltr" lang="es-ES">
<head>
	<?php require_once '../class/function.php'; $url = curPageURL(); ?>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
	<title>Reservas y Tarifas</title>
	<link rel="stylesheet" type="text/css" href="<?=$url?>/css/domus2.css" media="all" />
	<link rel="stylesheet" type="text/css" href="<?=$url?>/css/jquery-ui.css" />
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
		$('.form').on('submit',function(e) {
			e.preventDefault();
			var url = "submit.php";
			$.ajax({
			type: "POST",
			url: url,
			data: $(".form").serialize(),
			success: function(data){
			   $(".respuesta").html(data);
			   if(data=='<span class="verde">Su solicitud ha sido enviada</span>') $(".form")[0].reset();
			}
			});
			return false;
		});
		//añade o quita los elementos de habitaciones
		var i = 1;
		var j = 0;
		j=5-j;
		$('.add').click(function() {
		if(i >= 1 && i <= 5 && i <= j) {
			i++;
			$("#h"+i).fadeIn(1000);
			$(".h"+i).fadeIn(1000);
		}
		});
		$('.rem').click(function() {
		if(i > 1) {
			$('#h'+i).hide(1000);
			$('.h'+i).hide(1000);
			$('#r'+i).val('');
			i--;
		}
		});
		//calendario
		var dt = new Date();
		var mes = dt.getMonth();
		var dia = dt.getDate();
		var año = dt.getFullYear();
		var d = "<?php echo date("d", strtotime($fecha_limite));?>";
		var m = "<?php echo date("m", strtotime($fecha_limite));?>";
		var y = "<?php echo date("Y", strtotime($fecha_limite));?>";
		$( ".datepicker,.datepicker2" ).datepicker({minDate: new Date(año, mes, dia),
			maxDate: new Date(y, m, d),
			dateFormat: 'd-m-yy',
			constrainInput: true,
			monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
			monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic'],
			dayNames: ['Domingo','Lunes','Martes','Miércoles','Jueves','Viernes','Sábado'],
			dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
			dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
		});
		function tabla(){
			if($(window).width()<360){
				var tbaja = <?=$tbaja;?>;
				if(tbaja==0) $('.tabla thead th:nth-child(3),.tabla tbody th:nth-child(4),.tabla tbody th:nth-child(5),.tabla tbody td:nth-child(4),.tabla tbody td:nth-child(5)').css('display','none');
				else $('.tabla thead th:nth-child(2),.tabla tbody th:nth-child(2),.tabla tbody th:nth-child(3),.tabla tbody td:nth-child(2),.tabla tbody td:nth-child(3)').css('display','none');
			}
			else $('.tabla th,.tabla td').css('display','table-cell');
		}
		tabla();
		$(window).resize(function() {
			tabla();
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
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<style>
		.fixed{position:fixed}
		.main{background-color:#fff;color:#444;background-image:url('../img/inicio/pattern-7s31.png');/*background-size:cover;*/}
		.main .mt{background-color:rgba(255,255,255,1);width:100%;max-width:700px;margin:auto;padding:50px;border-left:1px solid #ddd;border-right: 1px solid #ddd;}
		.main table{margin:auto;border-collapse:collapse;border-spacing:0;background-color:#fff}
		.main td{vertical-align:middle;padding:5px;}
		.tabla thead{background-color:#353433;color:#fff;}
		.tabla th{padding:7px;vertical-align:middle;font-weight:bold;}
		.tabla tbody tr:nth-child(odd){background-color:#eee;}
		.tabla tbody tr:nth-chil225.950	USD396	$250.9d(even){background-color:#fff;}
		.form{padding:20px 0;max-width:1024px;width:100%;margin-top:20px;border:1px solid #ddd}
		.form table{width:100%;max-width:500px}
		.form td{padding:2px}
		.form input,.form textarea,.form select{width:100%;border:1px solid #ccc;padding:3px;margin:2px 0;background-color:#e8e8e8;color:#818181;}
		.form textarea{resize:vertical;max-height:200px;}
		.form .radio{width:20px}
		.form .i{color:red}
		.add,.rem{background-color:#999;color:#FFF;border:0;width:40px;cursor:pointer}
		.add:hover,.rem:hover{background-color:#777}
		.form td:nth-child(1){width:95px;}
		.form img{width:200px;height:40px;border:1px solid #ccc}
		.form .submit{width:150px;background-color:#AD0303;color:#fff;padding:5px;border:none;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px;cursor:pointer;-webkit-transition:1s;transition:1s;}
		.form .submit:hover{background-color:#CF0000}
		#h2, .h2, #h3, .h3, #h4, .h4, #h5, .h5, #h6, .h6 {display:none;}
		#h2,#h3,#h4,#h5,#h6{border:1px solid #ddd;border-bottom:none}
		.h2,.h3,.h4,.h5,.h6{border:1px solid #ddd;border-top:none}
		.right{text-align:right}
		.verde{background-color:#3fb283;color:#fff;padding:7px}
		.rojo{background-color:#b23f3f;color:#fff;padding:7px}
		@media only screen and (max-width: 780px) {
			.main .mt{padding-top:70px}
		}
		@media only screen and (max-width: 500px) {
			.main .mt{padding:10px;padding-top:70px}
			.form{border:none}
		}
		@media only screen and (max-width: 360px) {
			.tabla th{}
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
					<div class="main">
						<div class="mt">
						<div class="tabla">
							<table>
								<thead>
									<tr>
										<th colspan="1">TARIFAS GENERALES</th>
										<th colspan="2">Temporada Baja<br /><?=$minimaBaja?> / <?=$maximaBaja?></th>
										<th colspan="2">Temporada Alta<br /><?=$minimaAlta?> / <?=$maximaAlta?></th>
									</tr>
								</thead>
								<tbody>
								<tr>
									<th>Tipo habitación</th>
									<th>Con IVA</th>
									<th>Dólares</th>
									<th>Con IVA</th>
									<th>Dólares</th>
								</tr>
								<?php for($i=0;$i<6;$i++){ ?>
								<tr>
									<td class="izq"><?=$tipo[$i]?></td>
									<td>$<?=$valor[$i]?></td>
									<td>USD<?=$valorUSD[$i]?></td>
									<td>$<?=$valor2[$i]?></td>
									<td>USD<?=$valorUSD2[$i]?></td>
								</tr>
								<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="5">Las tarifas corresponden a habitaciones en cama king size para uso doble y single, expresadas en pesos chilenos y en dólares americanos.<br />
										Las tarifas en pesos chilenos incluyen IVA. Precio incluye desayuno, estacionamientos limitados sujetos a disponibilidad.<br />
										*Tarifas sujetas a cambios por festividades o programas especiales.										
										</td>
									</tr>
									<tr>
										<td colspan="5"><a href="#">PDF – Condiciones Generales y políticas de cancelación</a></td>
									</tr>
								</tfoot>
							</table>
						</div><!--/info-->
						<form class="form" action="" method="post">
							<table>
							<tr>
								<td colspan="2">Envíe su solicitud de reserva y lo contactaremos a la brevedad</td>
							</tr>
							<tr>
								<td colspan="2"><i><span class='i'>&#42;</span> Campos requeridos</i></td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span>Nombre:</td>
								<td><input type="text" name="nombre" placeholder="nombre y apellido" required /></td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span>Dirección:</td>
								<td><input type="text" name="direccion" required /></td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span>Telefono:</td>
								<td><input type="text" name="telefono" required /></td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span>Email:</td>
								<td><input type="email" name="email" placeholder="ejemplo@correo.com" required onchange="validarEmail(this.value);" /></td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span>Fecha arribo:</td>
								<td><input class="datepicker" type="text" id="datepicker" name="arribo" placeholder="d-m-yyyy" required /></td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span>Fecha salida:</td>
								<td><input class="datepicker" type="text" id="datepicker2" name="salida" placeholder="d-m-yyyy" required /></td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span>Adultos:</td>
								<td><input type="number" name="adultos" placeholder="cantidad" required min="1" maxlength="2"/></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td><input class="radio" id="radio1" type="radio" name="tipo" value="Persona Natural" checked><label for="radio1">Persona Natural&nbsp;</label><input class="radio" id="radio2" type="radio" name="tipo" value="Empresa"><label for="radio2">Empresa</label></td>
							</tr>
							<tr id="h1">
								<td><span class='i'>&#42;</span>Habitación:</td>
								<td><select data-native-menu="true" name="habitacion1" id="s1" required>
									<option value="0">Seleccione:</option>
									<?php for ($i=0;$i<count($tipo);$i++){ ?>
									<option value="<?=$tipo[$i]; ?>" <?php if($i==$hab){echo 'selected';}?>><?=$tipo[$i]; ?></option>
									<?php } ?>
									</select>
								</td>
							</tr>
							<tr class="h1">
								<td><span class='i'>&#42;</span>Número:</td>
								<td><input type="number" name="reserva1" placeholder="número de habitaciones" min="1" max="2" maxlength="1" required /></td>
							</tr>
							<tr class="right">
								<td>&nbsp;</td>
								<td><button type="button" class="add" title="Agrege más reservas">+</button><button type="button" class="rem" title="Quite reservas">-</button></td>
							</tr>
							<tr id="h2">
								<td>Habitación:</td>
								<td><select data-native-menu="true" name="habitacion2" id="s2">
									<option value="0">Seleccione:</option>
									<?php for ($i=0;$i<count($tipo);$i++) { ?>
									<option value="<?=$tipo[$i]; ?>"><?=$tipo[$i]; ?></option>
									<?php } ?>
									</select>
								</td>
							</tr>
							<tr class="h2">
								<td>Número:</td>
								<td><input type="number" name="reserva2" id="r2" placeholder="número de habitaciones" min="1" max="2" maxlength="1" /></td>
							</tr>
							<tr id="h3">
								<td>Habitación:</td>
								<td><select data-native-menu="true" name="habitacion3" id="s3">
									<option value="0">Seleccione:</option>
									<?php for ($i=0;$i<count($tipo);$i++) { ?>
									<option value="<?=$tipo[$i]; ?>"><?=$tipo[$i]; ?></option>
									<?php } ?>
									</select>
								</td>
							</tr>
							<tr class="h3">
								<td>Número°:</td>
								<td><input type="number" name="reserva3" id="r3" placeholder="número de habitaciones" min="1" max="2" maxlength="1" /></td>
							</tr>
							<tr id="h4">
								<td>Habitación:</td>
								<td><select data-native-menu="true" name="habitacion4" id="s4">
									<option value="0">Seleccione:</option>
									<?php for ($i=0;$i<count($tipo);$i++) { ?>
									<option value="<?=$tipo[$i]; ?>"><?=$tipo[$i]; ?></option>
									<?php } ?>
									</select>
								</td>
							</tr>
							<tr class="h4">
								<td>Número:</td>
								<td><input type="number" name="reserva4" id="r4" placeholder="número de habitaciones" min="1" max="2" maxlength="1" /></td>
							</tr>
							<tr id="h5">
								<td>Habitación:</td>
								<td><select data-native-menu="true" name="habitacion5" id="s5">
									<option value="0">Seleccione:</option>
									<?php for ($i=0;$i<count($tipo);$i++) { ?>
									<option value="<?=$tipo[$i]; ?>"><?=$tipo[$i]; ?></option>
									<?php } ?>
									</select>
								</td>
							</tr>
							<tr class="h5">
								<td>Número:</td>
								<td><input type="number" name="reserva5" id="r5" placeholder="número de habitaciones" min="1" max="2" maxlength="1" /></td>
							</tr>
							<tr id="h6">
								<td>Habitación:</td>
								<td><select data-native-menu="true" name="habitacion6" id="s6">
									<option value="0">Seleccione:</option>
									<?php for ($i=0;$i<count($tipo);$i++) { ?>
									<option value="<?=$tipo[$i]; ?>"><?=$tipo[$i]; ?></option>
									<?php } ?>
									</select>
								</td>
							</tr>
							<tr class="h6">
								<td>Número:</td>
								<td><input type="number" name="reserva6" id="r6" placeholder="número de habitaciones" min="1" max="2" maxlength="1" /></td>
							</tr>
							<tr>
								<td>Comentario:</td>
								<td><textarea name="comentario" placeholder="Mensaje"></textarea></td>
							</tr>
							<tr>
								<td>&nbsp;</td>
								<td>
									<?php echo '<img src="' . $_SESSION['captcha']['image_src'] . '" alt="verificación">'; ?>
								</td>
							</tr>
							<tr>
								<td><span class='i'>&#42;</span> Captcha:</td>
								<td><input type="text" name="verificar" placeholder="captcha en minúsculas" required /></td>
							</tr>
							<tr class="right">
								<td><input type="hidden" name="formulario" value="reserva" /></td>
								<td><input type="submit" class="submit" value="Solicitar reserva"></td>
							</tr>
							<tr>
								<td colspan="2"><div class="respuesta"></div></td>
							</tr>
						</table>
					</form>
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