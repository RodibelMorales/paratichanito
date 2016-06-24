<?php 
session_start();
include('clases/contenedorClasesGral.php');
 $infoPerfil = new ControlSesiones;
 	if (!isset($_SESSION['usuario'])) {
 		echo "<div class='alert alert-danger'><strong>Alto!</strong>El acceso esta restringido solo a usuarios registrados <a href='login.php'>Iniciar Sesion</a></div>";
 		exit();
 	}
 $infoPerfil->user = $_SESSION['usuario'];
 $infoPerfil->DatosUsuario();
?>
<div class="contenedorFormulario">
	<h1 class="text-center">Nueva Imagen</h1>
<form class="form-horizontal" role="form" method="post" action="envioPOST/nuevaImagen.php" name="formularioUPimage" enctype="multipart/form-data">
	<div class="form-group">
		<label class="sr-only"></label>
		<input name="foto" type="file" class="form-control" required placeholder="selecciona una imagen">
	</div>
	<div class="form-group">
		<label class="sr-only"></label>
		<input name="fechaEvento" type="date" class="form-control" required placeholder="Fecha en la que se capturo la imagen">
	</div>
	<div class="form-group">
		<label class="sr-only"></label>
		<input name="tituloImagen" type="text" class="form-control" required placeholder="Ingresa un titulo para la imagen">
	</div>
	<div class="form-group">
		<label class="sr-only"></label>
		<select name="idmunicipio" class="form-control" required placeholder="Selecciona una Opción">
			<option value="1">Cozumel</option>
			<option value="2">Felipe Carrillo Puerto</option>
			<option value="3">Isla Mujeres</option>
			<option value="4">Othon P. Blanco</option>
			<option value="5">Benito Juárez</option>
			<option value="6">José María Morelos</option>
			<option value="7">Lázaro Cárdenaz</option>
			<option value="8">Solidaridad</option>
			<option value="9">Tulum</option>
			<option value="10">Bacalar</option>
		</select>			
	</div>
	<div class="form-group">
		<label class="sr-only"></label>
		<?php 
		for ($i=0; $i <count($infoPerfil) ; $i++) { 
		?>
		<input name="idUser" type="hidden" value="<?php echo $infoPerfil->idUsuarios;?>">
		<?php } ?>
		<input name="coloniaLocalidad" type="text" class="form-control" required placeholder="Ingresa el nombre de la Colonia o Localidad del evento">
	</div>
	<div class="form-group">
		<label class="sr-only"></label>
		<textarea name="descripcionEvento" class="form-control" required placeholder="Agrega una descripción a la imagen"></textarea>
	</div>
	<div class="form-group">
		<button  type="reset" class="btn btn-link btnforms "><span class=""></span>Cancelar</button>
		<button  type="submit" class="btn btn-success btnforms" ><span class="fa fa-upload"></span>Subir Foto</button>
	</div>
</form>