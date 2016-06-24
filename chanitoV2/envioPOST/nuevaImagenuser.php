<?php 
include('../clases/contenedorClasesGral.php');
$subirImagen= new updownImagenUSER();
$ruta = "../BancoImagenes/";
opendir($ruta);
$destino =$ruta.$_FILES['foto']['name'];
copy($_FILES['foto']['tmp_name'], $destino);
$nombre = $_FILES['foto']['name'];
if (!file_exists("../BancoImagenes/".$nombre)) {
		if($_POST){
		$subirImagen->tituloImagen 			= $_POST['tituloImagen'];
		$subirImagen->fecha_evento 			= $_POST['fechaEvento'];
		$subirImagen->localidadColonia      = $_POST['coloniaLocalidad'];
		$subirImagen->descripcion_Evento	= $_POST['descripcionEvento'];
		$subirImagen->img_Evento 			= $nombre;
		$subirImagen->Usuarios_idUsuarios   = $_POST['idUser'];
		$subirImagen->municipios_id_m		= $_POST['idmunicipio'];
		$subirImagen->subeImagenUser();
	}
	else{
		echo "<script language='JavaScript'> alert('Ha ocurrido un error al cargar la imagen'); window.location='../paneluser.php';</script>";
	}
}
else{
	echo "<script language='JavaScript'> alert('La imagen seleccionada ya existe verifica el nombre o intenta con una nueva imagen!'); window.location='../paneluser.php';</script>";
}
?>