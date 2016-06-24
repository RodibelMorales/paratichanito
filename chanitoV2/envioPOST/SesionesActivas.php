<h1 class="text-center">Usuarios en Linea</h1>
<?php
	include('../clases/contenedorClasesGral.php');
	$usuariosOn = new ControlSesiones();
	$verUsuariOn = $usuariosOn->usuarioEnLinea();
		for ($i=0; $i <count($verUsuariOn); $i++) { 
?>
	<div class="col-xs-4 col-md-2">
		<div class="hero-feature">
            <div class="thumbnail text-center">
                <img class="img-circle" src="BancoImagenes/imgPerfil/<?php echo $verUsuariOn[$i]['imgperfil'];?>">
                <div class="caption">
                    <h3><?php echo $verUsuariOn[$i]['nombre'];?></h3>
                    <p>Activo</p>
                    <p><img src="img/online.gif"></p>
                </div>
            </div>
        </div>
	</div>
<?php 
	}
?>