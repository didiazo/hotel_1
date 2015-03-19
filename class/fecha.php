<?php
class fecha {
	public static function mostrarFecha() {
		include 'dato.php';
        $enlace = new mysqli($infitrion,$usuario,$clave,$base);
		$sql = "select * from fechas";
        $res = mysqli_query($enlace,$sql);
		$enlace->close();
        return $res;
    }
}
?>