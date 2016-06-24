<?php 
session_start();
	if (!isset($_SESSION['usuario'])) {
		echo "<div class='alert alert-danger'><strong>Alto!</strong>El acceso esta restringido solo a usuarios registrados <a href='login.php'>Iniciar Sesion</a></div>";
		exit();
	}else{
		if ($_SESSION['tipoUser'] == "Administrador") {
			
			
		}else{
			header("Location:paneluser.php");
		}

	}
?>
<html>
<head>
	<title>José Luis Chanito Toledo</title>
	<?php
		include('parches/head.php');
	?>
	<script src="../../chanitoV2/parches/funcionesJavascript.js"></script>
</head>
<body>
	<section class="contenedor-gral">
		<div class="row">
			<div class="col-xsm-2 col-sm-2 col-md-2 col-lg-2 col-xlg-12">
				<div class="menu-operaciones"><!--div contenedor del menu-->
					<img src="img/logo1.png" class="img-menuOpera">
					<ul class="nav nav-pills nav-stacked">
  						<li><a href="paneladmin.php" id="inicio" class="cursorhoverAJAX"><i class="fa fa-home"></i>Inicio</a></li>
  						<li><a href="#" id="opcionesmenu" class="Nform cursorhoverAJAX"><i class="fa fa-upload"></i>Subir Nueva foto</a></li>
  						<li><a href="#" id="opcionesmenu2" class=" Hfotos cursorhoverAJAX"><i class="fa fa-history"></i>Historico de fotos</a></li>
  						<li><a href="#" id="opcionesmenu3" class=" Nusuario cursorhoverAJAX"><i class="fa fa-plus-square"></i>Agregar Nuevo Usuario</a></li>
  						<li><a href="#" id="opcionesmenu4" class=" profile cursorhoverAJAX"><i class="fa fa-wrench"></i>Configurar</a></li>
  						<li><a href="envioPOST/cerrarSesion.php?user=<?php echo $_SESSION['usuario'];?>"class="cursorhoverAJAX"><i class="fa fa-sign-out"></i>Logout</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<h1>Bienvenido</h1>
				<div class="container AnchoContainer">
					<div class="row"> <!--Columna contenedora de los alumnos en linea-->
						<div id="viewUserONLINE" class="viewUserONLINE"></div>
					</div>
					<div class="row">
						<div class="MuestrainfoAJAX"></div>
					</div>
					<div class="row">
						<div class="HistorialUser"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>