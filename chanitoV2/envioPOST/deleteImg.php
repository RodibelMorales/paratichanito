<?php 
include('../clases/contenedorClasesGral.php');

$confirmaDelete = new AccionesH;
 if (isset($_REQUEST['id_f'])) {
 	$confirmaDelete->id_f = $_REQUEST['id_f'];
 	$confirmaDelete->eliminaImagen();
 }else{
 	echo "valor vacio";
 }


?>