<div class="contenedorFormulario">
	<h1 class="text-center">Agregar Usuario</h1>
	<form role="form" action="envioPOST/NuevoUsuario.php" method="post" class="form-horizontal" enctype="multipart/form-data">
		<div class="form-group">
			<input class="btn btn-default" type="file" name="imgUser" required>
		</div>
		<div class="form-group">
			<label class="sr-only"></label>
	    	<input class="form-control " type="text" name="nombre" placeholder="Ingresa tu nombre" required>
	    </div>
	    <div class="form-group">
	    	<input class="form-control " type="text" name="aPaterno" placeholder="Apellido Paterno" required>
	    </div>
	    <div class="form-group">
	    	<input class="form-control " type="text" name="aMaterno" placeholder="Apellido Materno" required>
	    </div>
	    <div class="form-group">
	    	<input class="form-control " type="text" name="user" placeholder="Usuario" required>
	    </div>
	    <div class="form-group">
	    	<input class="form-control " type="password" name="password" placeholder="password" required>
	    </div>
	    <div class="form-group">
	    	<select class="form-control" name ="tipoUsuario" required>
	    		<option value="" disable selected>Selecciona una Opción</option>
	    		<option>Administrador</option>
	    		<option>Usuario</option>
	    	</select>
	    </div>
	    <div class="form-group">
	    	<input name="reset" type="reset" class="btn btn-link btnforms " value="Cancelar">
	    	<button type="submit" class="btn btn-success btnforms "><span class="fa fa-floppy-o"></span>Crear</button>
	    </div>

	</form>
</div>