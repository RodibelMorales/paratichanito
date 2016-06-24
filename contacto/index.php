<!doctype html>
<html>
<head>
	<title>José Luis Chanito Toledo | Contacto</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/> 
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <meta name="Description" content="Diputado Federal Por Quintana Roo | José Luis Chanito Toledo">
    <meta name="keywords" content="contacto JLTM, contacto chanito toledo, contactar chanito toledo, jose luis toledo contacto, jose luis toledo contactar, correo chanito toledo">
    <!---->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="José Luis Chanito Toledo" />
    <meta property="og:url" content="http://www.chanitoledo.com/contacto" />
    <meta property="og:image:secure_url" content="http://chanitoledo.com/img/cvchanitoledo.png" />
    <meta property="og:image" content="http://chanitoledo.com/img/cvchanitoledo.png" />
    <meta property="og:image:width" content="200" />
    <meta property="og:image:height" content="200" />
    <meta property="og:description" content="Diputado Federal Electo,Distrito 01 Quintana Roo." />
    <meta property="og:site_name" content="www.chanitoledo.com">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--Favicon del sitio-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Pontano+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--Inician los estilos CSS del sitio-->
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/MediaQuerys.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    
    <script src="../js/wow.min.js"></script>
    <script>
            new WOW().init();    
    </script>
</head>
<body>
	<section class="contenedorGeneralContacto">
		<header id="headerContacto">
		    <div class="contenedor">
                <div class="CLCCResponsive">
                    <img src="../img/logoMenuChanito.png" class="logoChanitoCamaraR">
                </div>
                <div class="menu_responsive">
                    <a href="#" class="bt-menu"><i class="fa fa-bars btnMenuR"></i></a>
                </div>
                <nav class="menu smint">
                    <div class="contenedorLogoChanitoCamara">
                        <img src="../img/logoMenuChanito.png" class="logoChanitoCamara">
                    </div>
                    <ul>
                        <li>
                            <a href="../index.php#inicio">Inicio</a>
                        </li>
                        <li>
                            <a href="../index.php#blog">Blog</a>
                        </li>
                        <li>
                            <a href="../biografia-joseluistoledo-chanito.php">C.V</a>
                        </li>
                        <li>
                            <a href="../multimedia-chanito-toledo.php">Multimedia</a>
                        </li>
                        <li>
                            <a href="../contacto_chanito.php">Contacto</a>
                        </li>
                        <li>
                            <button type="button" class="btnEncuesta"  data-dismiss="modalConsultaCuidadana" data-toggle="modal" data-target="#modalConsultaCuidadana">Encuesta Cuidadana</button>
                        </li>
                    </ul>
                </nav>
            </div>

		</header>
		<?php include('../modalConsultaCuidadana.html'); ?>
		<section class="contenedorContacto">
				<div class="sliderContacto">
			        <ul class="cb-slideshow">
			            <li><span>José Luis Toledo Medina</span></li>
			            <li><span>Para ti Chanito Toledo</span></li>
			            <li><span>Quintana Roo para Ti</span></li>
			            <li><span>Diputado Federal Quintana Roo</span></li>
			            <li><span>Chanito Toledo</span></li>
			            <li><span>José Luis Chanito Toledo</span></li>
			        </ul>

		            <div class="formularioContacto">
		                <form method="post" action="mail.php" class="form-horizontal" id="formulario">
		                    <div class="form-group">
		                        <h1 id="tituloFormulario"><i class="fa fa-envelope espacioIcono"></i>Contacto</h1>
		                        <div class="col-xs-12">
		                            <select class="form-control" name="asunto" id="asunto" >
		                                <option value="" disable selected>Selecciona un Asunto</option>
		                                <option>Agendar una Cita</option>
		                                <option>Propuesta de Ley</option>
		                                <option>Otros</option>
		                            </select>
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <div class="col-xs-12">
		                            <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" />
		                        </div>
		                    </div>
		                    <div class="form-group">
		                        <div class="col-xs-6">
		                            <input type="text" name="paterno" id="paterno" placeholder="Paterno" class="form-control" />
		                        </div>         
		                        <div class="col-xs-6">
		                            <input type="text" name="materno" id="materno" placeholder="Materno" class="form-control" />
		                        </div>
		                    </div>
		                    <div class="form-group">                  
		                        <div class="col-xs-6">
		                            <input type="text" name="numtelefono" id="numtelefono" placeholder="Numero de Telefono" class="form-control"  />
		                        </div>         
		                        <div class="col-xs-6">
		                            <input type="email" name="correo" id="correo" placeholder="Tucorreo@ejemplo" class="form-control"  />         
		                        </div>
		                    </div>
		                    <div class="form-group">                                 
		                        <div class="col-xs-6">          
		                            <select class="form-control" name="provinciaList" id="provinciaList" onChange="return   provinciaListOnChange()" >
		                            <option value="" disable selected>Municipio</option>
		                                <?php
		                                    $xml = simplexml_load_file('provincias_ajax/provinciasypoblaciones.xml');
		                                    $result = $xml->xpath("/lista/provincia/nombre | /lista/provincia/@id");
		                                        for ($i=0;$i<count($result);$i+=2){
		                                        $e=$i+1;
		                                        $provincia=UTF8_DECODE($result[$e]);
		                                        echo("<option value='$result[$i]'>$provincia</option>");
		                                    }
		                                ?>
		                            </select>
		                        </div>
		                        <div class="col-xs-6">
		                            <select class="form-control" name="localidadList" id="localidadList"  >
		                                <option value="" disable selected>Cuidad o Población</option>
		                            </select>
		                        </div>
		                    </div>
		                    <div class="form-group">                 
		                        <div class="col-xs-12">
		                            <textarea name="direccion" id="direccion" rows="3" class="form-control noResize" placeholder="Dirección"></textarea>
		                        </div>
		                    </div>
		                    <div class="form-group">                  
		                        <div class="col-xs-12">
		                            <textarea name="mensaje" id="mensaje" rows="3" class="form-control noResize" placeholder="Escribe tu mensaje aqui"></textarea>         
		                        </div>
		                    </div>
		                    <div class="form-group ">
		                        <div class="col-xs-12">
		                            <input id="btn_envia" name="envia" type="submit" class="btn btn-primary" value="Enviar">
		                            <input id="btn_cancela" type="reset"  class="btn btn-default" value="Cancelar">
		                        </div>
		                    </div>
		                </form>
		            </div>
				</div>
		</section>
		<?php include("../footer.php"); ?>
	</section>

	<script src="../bootstrap/js/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/jquery.smint.js"></script>
    <script src="../js/validaFormulario.js"></script>
	<script src="../provincias_ajax/js/AjaxCode.js"></script>
	<script src="../js/menuR.js"></script>
    <script>
        $(document).ready(function(){
	        $('#formulario').bootstrapValidator({
	                feedbackIcons: {
	                    valid: 'glyphicon glyphicon-ok',
	                    invalid: 'glyphicon glyphicon-remove',
	                    validating: 'glyphicon glyphicon-refresh'
	                },
	                fields: {
	                    asunto: {
	                        validators: {
	                            notEmpty: {
	                                message: 'Selecciona un asunto'
	                            }
	                        }
	                    },
	                    nombre:{
	                        validators:{
	                            notEmpty:{
	                                message:'Campo obligatorio Ingresa tu nombre(s)'
	                            }
	                        }
	                    },
	                    paterno:{
	                        validators:{
	                            notEmpty:{
	                                message:'Campo obligatorio Ingresa tu Apellido Paterno'
	                            }
	                        }
	                    },
	                    materno:{
	                        validators:{
	                            notEmpty:{
	                                message:'Campo Obligatorio Ingresa tu Apellido Paterno'
	                            }
	                        }
	                    },
	                    numtelefono:{
	                        validators:{
	                            notEmpty:{
	                                message:'Campo Obligatorio Ingresa un numero telefonico valido'
	                            },
	                            regexp: {
	                                regexp: /^[0-9]+$/,
	                                message: 'Solo se admiten numeros para el campo telefono'
	                            }
	                        }
	                    },
	                    correo:{
	                        validators:{
	                                notEmpty:{
	                                message:'Ingresa un correo valido',
	                            },
	                            emailAddress: {
	                                message:'Correo electronico novalido'
	                            }
	                        }
	                    },
	                    provinciaList:{
	                        validators:{
	                            notEmpty:{
	                                message:'Selecciona un municipio'
	                            }
	                        }
	                    },
	                    localidadList:{
	                        validators:{
	                            notEmpty:{
	                                message:'Selecciona una cuidad o población'
	                            }
	                        }
	                    },
	                    direccion:{
	                        validators:{
	                            notEmpty:{
	                                message:'Ingresa un domicilio valido'
	                            }
	                        }
	                    },
	                    mensaje:{
	                        validators:{
	                            notEmpty:{
	                                message:'Ingresa un mensaje'
	                            }
	                        }
	                    },
	                    terms:{
	                        validators:{
	                            notEmpty:{
	                                message:'Aún no selecciona la casillas de los terminos'
	                            }
	                        }
	                    }
	                }
	        });
            $(".menu").smint({
                'scrollSpeed' : 500
            });
        });
        $(window).scroll(function(){
            if($(window).scrollTop()>0){
                $('.menu').addClass('menufix');
                $('.menu_responsive').addClass('menufix lineMenuR');
            }else{
               $('.menu').removeClass('menufix');
               $('.menu_responsive').removeClass('menufix lineMenuR');
            }
        });
    </script>
</body>
</html>