<?php

class reservas {

	public static function guardarReservas($nombre, $direccion, $telefono, $email, $fecha_arribo, $fecha_salida, $adultos, $radio, $comentario) {
        include 'dato.php';
        $enlace = new mysqli($infitrion,$usuario,$clave,$base);
		date_default_timezone_set('America/Santiago');
		$fecha = date('Y-m-d H:i:s');
        $sql = "INSERT INTO reservas(nombre,fecha,direccion,telefono,mail,fecha_arribo,fecha_salida,adultos,tipo,comentario) VALUES('$nombre','$fecha', '$direccion', $telefono, '$email', '$fecha_arribo', '$fecha_salida', $adultos, '$radio', '$comentario')";
		$res = mysqli_query($enlace,$sql);
		
		//$sql = "select MAX(idreserva) as id from reservas";
        //$res = mysqli_query($enlace,$sql) or die("Error: ".mysqli_error($enlace));;
        //$id = mysqli_fetch_array($res);
        //$id = $id["id"];
		
		$enlace->close();
        //return $id;
    }
	
	/*public static function guardarReHa($idreserva,$tipoHabitacion,$cantidad){
		include 'dato.php';
        $enlace = new mysqli($infitrion,$usuario,$clave,$base);
		
		$sql = "SELECT idhabitacion as id FROM habitaciones WHERE tipo='$tipoHabitacion'";
        $res = mysqli_query($enlace,$sql);
        $id = mysqli_fetch_array($res) or die("Error: ".mysqli_error($enlace));;
        $idhabitacion = $id["id"];
		
		$sql = "INSERT INTO reha(idre,idha,cantidad) VALUES($idreserva,$idhabitacion,$cantidad)";
		$res = mysqli_query($enlace,$sql);
		
		$sql = "UPDATE habitaciones SET disponibles=(disponibles-$cantidad) WHERE idhabitacion=$idhabitacion and disponibles>=$cantidad";
		$res = mysqli_query($enlace,$sql);
		
		$enlace->close();
		return $res;
	}*/
	
	/* public static function consultarDisponible($tipo, $cantidad){
		include 'dato.php';
        $enlace = new mysqli($infitrion,$usuario,$clave,$base);
		
		$sql = "SELECT disponibles as id FROM habitaciones WHERE tipo='$tipo'";
		$res = mysqli_query($enlace,$sql);
		$id = mysqli_fetch_array($res) or die("Error: ".mysqli_error($enlace));;
        $disponibles = $id["id"];
		
		$enlace->close();
		if($disponibles>=$cantidad) return true;
		else return false;
	} */

	public static function mailReservas($mailHab){
		//$mailRe[] = array($nombre, $direccion, $telefono, $email, $fecha_arribo, $fecha_salida, $adultos, $radio, $comentario, $tipoHabitacion, $cantidad);
		$header = 'From: '. $mailHab[0][0] .'<'. $mailHab[0][3] .'>';
		//$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		//$header .= "Mime-Version: 1.0 \r\n";
		//$header .= "Content-Type: text/plain";
		$mensaje = "Mensaje enviado desde domusmare.cl por: \r\n\n";
		$mensaje .= "Nombre: " . $mailHab[0][0] . " \r\n";
		$mensaje .= "Telefono: " . $mailHab[0][2] . " \r\n";
		$mensaje .= "Mail: " . $mailHab[0][3] . " \r\n";
		$mensaje .= "Direccion: " . $mailHab[0][1] . " \r\n";
		$mensaje .= "Nº Adultos: " . $mailHab[0][6] . " \r\n\n";
		$mensaje .= "Tipo: " . $mailHab[0][7] . " \r\n\n";
		for($i=0;$i<count($mailHab);$i++){
			$mensaje .= "Se reserva(n): " . $mailHab[$i][10] . " habitacion(es) : " . $mailHab[$i][9] . "\r\n";
		}
		$mensaje .= "Para el dia: " . date('d/m/Y',strtotime($mailHab[0][4])) . " \r\n";
		$mensaje .= "Hasta el dia: " . date('d/m/Y',strtotime($mailHab[0][5])) . " \r\n\n";
		$mensaje .= "Comentario: " . $mailHab[0][8] . " \r\n\n";
		$mensaje .= "Enviado el " . date('d/m/Y H:i:s', time());
		$para = 'reservas@domusmare.cl';
		$asunto = 'Reservas | Domus Mare';
		mail($para, $asunto, utf8_decode($mensaje), $header);
	}
}

?>