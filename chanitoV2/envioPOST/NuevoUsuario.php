<?php 
include ('../clases/contenedorClasesGral.php');
$nuevoUsuario= new ControlSesiones();
$ruta = "../BancoImagenes/imgPerfil/";
opendir($ruta);
$destino =$ruta.$_FILES['imgUser']['name'];
copy($_FILES['imgUser']['tmp_name'], $destino);
$nombre = $_FILES['imgUser']['name'];
if ($_POST) {
 	$nuevoUsuario->nombre 		= $_POST['nombre'];
 	$nuevoUsuario->imgperfil	= $nombre;
 	$nuevoUsuario->a_Paterno 	= $_POST['aPaterno'];
 	$nuevoUsuario->a_Materno	= $_POST['aMaterno'];
 	$nuevoUsuario->user 		= $_POST['user'];
 	$nuevoUsuario->password 	= md5($_POST['password']);
 	$nuevoUsuario->tipoUsuario  = $_POST['tipoUsuario'];
 	$nuevoUsuario->NuevoUsuario();
 } 
?>