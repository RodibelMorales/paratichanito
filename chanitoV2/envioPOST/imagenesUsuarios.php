<?php
session_start();
include('clases/contenedorClasesGral.php');
$UserID = new ControlSesiones();
$UserID->user = $_SESSION['usuario'];
$UserID->HistorialIDuser(); 
?>
