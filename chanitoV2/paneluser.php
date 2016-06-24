<?php 
session_start();
	if (!isset($_SESSION['usuario'])) {
		echo "<div class='alert alert-danger'><strong>Alto!</strong>El acceso esta restringido solo a usuarios registrados <a href='login.php'>Iniciar Sesion</a></div>";
		exit();
	}else{
		if ($_SESSION['tipoUser'] == "Usuario") {
			
		}else{
			header("Location:paneladmin.php");
		}

	}
?>
<!doctype html>
<html>
<head>
	<title>José Luis Chanito Toledo</title>
	<?php
		include('parches/head.php');
	?>
</head>
<body>
	<section class="contenedor-gral">
		<div class="row">
			<div class="col-xsm-2 col-sm-2 col-md-2 col-lg-2 col-xlg-12">
				<div class="menu-operaciones"><!--div contenedor del menu-->
					<img src="img/logo1.png" class="img-menuOpera">
					<ul class="nav nav-pills nav-stacked">
  						<li><a href="paneluser.php"><i class="fa fa-home"></i>Inicio</a></li>
  						<li><a class="Nformuser cursorhoverAJAX"><i class="fa fa-upload"></i>Subir Nueva foto</a></li>
  						<li><a href="#"class="profile cursorhoverAJAX"><i class="fa fa-wrench"></i>Configurar</a></li>
  						<li><a href="envioPOST/cerrarSesion.php"class="cursorhoverAJAX"><i class="fa fa-sign-out"></i>Logout</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-9">
				<h1>Bienvenido</h1>
				<div class="container AnchoContainer">
					<div class="row">
						<?php include('envioPOST/imagenesUsuarios.php'); ?>
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
	<script type="text/javascript">
		window.onload = function(){killerSession();}
		function killerSession(){
			setTimeout("window.open('envioPOST/cerrarSesion.php','_top');",900000);
		}
	</script>	
</html>