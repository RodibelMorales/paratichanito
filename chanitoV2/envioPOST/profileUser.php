<?php
session_start();
include('../clases/contenedorClasesGral.php');
$infoProfile = new ControlSesiones;
	if (!isset($_SESSION['usuario'])) {
		echo "<div class='alert alert-danger'><strong>Alto!</strong>El acceso esta restringido solo a usuarios registrados <a href='login.php'>Iniciar Sesion</a></div>";
		exit();
	}
$infoProfile->user = $_SESSION['usuario'];
$infoProfile->DatosUsuario();
?>
<div class="panel panel-default" id="panelAdmin">
  <div class="panel-heading"><i class="fa fa-user"></i> Perfil de Usuario</div>
  <div class="panel-body">
	<?php for ($i=0; $i <count($infoProfile); $i++) {?>

		<form method="POST" class="form-horizontal" action="">
			<div class="control-group">
				<div class="form-group imgPerfilUsuer">
					<img class="img-circuloUser" src="BancoImagenes/imgPerfil/<?php echo $infoProfile->imgperfil?>">
				</div>
			</div>
			<label class="control-label">Nombre(s)</label>
			<div class="form-group">
	 			<div class="col-md-12">
	 				<input class="form-control" type="text" name="nombre" value="<?php echo $infoProfile->nombre?>" readonly>
	 			</div>
			</div>
			<label class="control-label">Apellidos</label>
			<div class="form-group">
				<div class="col-md-6">
					<input class="form-control" type="text" name="" value="<?php echo $infoProfile->a_Paterno?>" readonly>
				</div>
				<div class="col-md-6">
					<input class="form-control" type="text" name="" value="<?php echo $infoProfile->a_Materno?>" readonly>
				</div>				
				
			</div>

	</form>
	 </div>

	<?php } ?>
  </div>
</div>



