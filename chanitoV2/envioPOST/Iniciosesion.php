<?php
include('../clases/contenedorClasesGral.php');
$inciaSesion = new  ControlSesiones();

if ($_POST) {
	$inciaSesion->user 		= $_POST['usuario'];
	$inciaSesion->password  = md5($_POST['password']);
	$inciaSesion->inicioSesion();
}
else{
	echo "<scrip language='JavaScript'> alert('¡Por favor inicia sesion!'); window.location='login.php'; </script>";
}

?>