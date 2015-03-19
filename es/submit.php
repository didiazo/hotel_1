<?php
session_start();

//guardo el formulario de reservas
if(isset($_POST["formulario"]) && $_POST["formulario"]=='reserva'){
if(isset($_POST["nombre"],$_POST["direccion"],$_POST["telefono"],$_POST["email"],$_POST["arribo"],$_POST["salida"],$_POST["adultos"],$_POST["verificar"])){
	require_once("../class/reservas.php");
	$verificar = $_POST["verificar"];
	$verificar2 = strtolower($_SESSION['captcha']['code']);
	if($verificar2==$verificar){
		$nombre = $_POST["nombre"];
		$direccion = $_POST["direccion"];
		$telefono = $_POST["telefono"];
		$email = $_POST["email"];
		$fecha_arribo = date('Y-m-d', strtotime($_POST["arribo"]));
		$fecha_salida = date('Y-m-d', strtotime($_POST["salida"]));
		$adultos = $_POST["adultos"];
		$comentario = $_POST["comentario"];
		$radio = $_POST["tipo"];
		require_once '../class/fecha.php';
		$res = fecha::mostrarFecha();
		$x = mysqli_fetch_array($res);
		$maximaBaja = date('d-m-Y', strtotime($x[2]));
		$maximaAlta = date('d-m-Y', strtotime($x[4]));
		if($maximaBaja <= date('d-m-Y')) $fecha_limite = $maximaBaja;
		else $fecha_limite = $maximaAlta;
		unset($mailHab);
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			for ($i=1;$i<=6;$i++){
				$reserva = "reserva" . $i;
				$habitacion = "habitacion" . $i;
				if(isset($_POST[$reserva]) && ($_POST[$habitacion]!="0")){
					$tipoHabitacion = $_POST[$habitacion];
					$cantidad = $_POST[$reserva];
					$f1 = strtotime($fecha_arribo);
					$f2 = strtotime($fecha_salida);
					$f3 = strtotime($fecha_limite);
					$f4 = strtotime(date('Y-m-d'));
					if(($f1 <= $f2) && ($f1 >= $f4) && ($f2 >= $f4) && ($f1 <= $f3) && ($f2 <= $f3)){
						reservas::guardarReservas($nombre, $direccion, $telefono, $email, $fecha_arribo, $fecha_salida, $adultos, $radio, $comentario);
						$error = false;
						$mailHab[] = array($nombre, $direccion, $telefono, $email, $fecha_arribo, $fecha_salida, $adultos, $radio, $comentario, $tipoHabitacion, $cantidad);
					}
					else {
						echo '<span class="rojo">Fechas inválidas</span>';
						$error = true;
						break;
					}
				}
			}
			if($error==false) {
				reservas::mailReservas($mailHab);
				echo '<span class="verde">Su solicitud ha sido enviada</span>';
			}
		}
		else echo '<span class="rojo">Email inválido</span>';
	}
	else echo '<span class="rojo">Ingrese correctamente el Captcha. En minúsculas</span>';
}
else echo '<span class="rojo">Faltan datos</span>';
}

//guardo el formulario de contacto
if(isset($_POST["formulario"]) && $_POST["formulario"]=='contacto'){
if (isset($_POST["nombre"], $_POST["email"], $_POST["mensaje"],$_POST["verificar"])) {
	$nombre = $_POST["nombre"];
	$email = $_POST["email"];
	$mensaje = $_POST["mensaje"];
	$verificar = $_POST["verificar"];
	$verificar2 = strtolower($_SESSION['captcha']['code']);
	if($verificar2==$verificar){
		if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			require_once("../class/contacto.php");
			contactos::guardarContacto($nombre,$email,$mensaje);
			contactos::mailContacto2($nombre,$email,$mensaje);
			echo '<span class="verde">Mensaje Enviado</span>';
		}
		else echo '<span class="rojo">Email inválido</span>';
	}
	else echo '<span class="rojo">Ingrese correctamente el Captcha. En minúsculas</span>';
}
else echo '<span class="rojo">Faltan datos</span>';
}
?>