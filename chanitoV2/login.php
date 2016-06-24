<?php 
	include('parches/head.php');
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Iniciar Sesión</title>
</head>
<body>
<div class="fondoFormulario">
    <div class="container espacioForm">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 text">
                <h1 class="h1"><strong>Bienvenido</strong></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 form-box">
                <div class="form-top">
                    <div class="form-top-left">
                        <h3 class="h3">Iniciar Sesión</h3>
                    </div>
                </div>
                <div class="form-bottom">
                    <form role="form" action="envioPOST/InicioSesion.php" method="post" class="login-form">
                        <div class="form-group">
                            <label class="sr-only" for="form-username">Usuario</label>
                            <input type="text" name="usuario" placeholder="Ingresa tu usuario" class="form-username form-control" id="form-username">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="form-password">Contraseña</label>
                            <input type="password" name="password" placeholder="Ingresa tu contraseña" class="form-password form-control" id="form-password">
                        </div>
                                 
                        <button type="submit" class="btn btn-success btnLogin "><span class="glyphicon glyphicon-lock"></span>Iniciar Sesion</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

