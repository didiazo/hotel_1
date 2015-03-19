<?php

class contactos {
	
	public static function guardarContacto($nombre, $email, $mensaje) {
		include 'dato.php';
        $enlace = new mysqli($infitrion,$usuario,$clave,$base);
		date_default_timezone_set('America/Santiago');
		$fecha = date('Y-m-d H:i:s');
        $sql = "INSERT INTO contactos(fecha,nombre,mail,mensaje) VALUES('$fecha','$nombre','$email','$mensaje')";
		$res = mysqli_query($enlace,$sql);
		$enlace->close();
		//contactos::mailContacto($nombre, $email, $mensaje);
        return $res;
    }
	
	public static function mailContacto2($nombre, $email, $mensaje){
		require_once("phpmailer/class.phpmailer.php");
		$mail = new PHPMailer();
		$mail->CharSet = 'UTF-8';
		$mail->IsSMTP();
		$mail->Host = "sagat.inc.cl;mail.domusmare.cl";
		$mail->SMTPAuth = true;
		$mail->Username = 'info@domusmare.cl';
		$mail->Password = 'l68k65aUZj';
		$mail->From=$email;
		$mail->FromName='Contacto | Domus Mare';
		$mail->Sender=$nombre;
		$mail->AddAddress('contacto@domusmare.cl');
		$mail->Subject = "Mensaje enviado desde www.domusmare.cl";
		$mail->IsHTML(true);
		date_default_timezone_set('America/Santiago');
		$fecha = date('Y-m-d H:i:s');
		$contenido = "Mensaje enviado desde www.domusmare.cl<br />";
		$contenido.= '<i style="#777">Fecha: '.$fecha.'</i><br /><br />';
		$contenido.= "Nombre: " . $nombre . "<br />";
		$contenido.= "Email: " . $email . "<br />";
		$contenido.= "Mensaje: " . $mensaje . "<br />";
		$mail->Send();
		$mail->SmtpClose();
	}
	
}

?>