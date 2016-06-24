<?php
session_start();
include('../clases/contenedorClasesGral.php');
$inciaSesion = new  ControlSesiones();
$inciaSesion->user = $_SESSION['usuario'];
$inciaSesion->cerrarSesion();
?>