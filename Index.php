<!doctype html>
<html>
<head>
  <title>José Luis Chanito Toledo | Para Ti Chanito</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/> 
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <meta name="Description" content="Diputado Federal Por Quintana Roo | José Luis Chanito Toledo">
    <meta name="keywords" content="
        Jose Luis Chanito Toledo,jose luis chanito toledo,jose luis toledo,Chanito Toledo,
        chanito toledo,Jose Luis Toledo Medina,José Luis Toledo,jose luis toledo,
        Contacto Chanito Toledo,Chanito,chanito,Playa Del Carmen,Playa del carmen,
        con chanito toledo yo cuento,propuestas chanito toledo,propuestas de ley chanito toledo,diputados quintana roo,camara de diputados,Camara De Diputados">
   <?php
      require_once('header/head.php');
    ?>
</head>
<body>
    <section class="contenedorGeneral">
        <header id="contenedorMenu">
            <div class="contenedor">
                <div class="CLCCResponsive">
                    <img src="img/logoMenuChanito.png" class="logoChanitoCamaraR">
                </div>
                <div class="menu_responsive">
                    <a href="#" class="bt-menu"><i class="fa fa-bars btnMenuR"></i></a>
                </div>
                <nav class="menu smint">
                    <div class="contenedorLogoChanitoCamara">
                        <img src="img/logoMenuChanito.png" class="logoChanitoCamara">
                    </div>
                    <ul>
                        <li>
                            <a href="#inicio">Inicio</a>
                        </li>
                        <li>
                            <a href="#blog" >Blog</a>
                        </li>
                        <li>
                            <a href="biografia-joseluistoledo-chanito.php">C.V</a>
                        </li>
                        <li>
                            <a href="multimedia-chanito-toledo.php">Multimedia</a>
                        </li>
                        <li>
                            <a href="contacto_chanito.php">Contacto</a>
                        </li>
                        <li>
                            <button type="button" class="btnEncuesta"  data-dismiss="modalConsultaCuidadana" data-toggle="modal" data-target="#modalConsultaCuidadana">Encuesta Cuidadana</button>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--Div contenedor del video fullback-->
            <?php include('modalConsultaCuidadana.html'); ?>
            <div class="secciones inicio">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                            <li data-target="#myCarousel" data-slide-to="4"></li>
                            <li data-target="#myCarousel" data-slide-to="5"></li>
                            <li data-target="#myCarousel" data-slide-to="6"></li>
                          </ol>

                        <!-- Wrapper for slides -->
                        <div class="fondo">
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img src="img/slider/chanito_estrado.png" alt="chanito toledo, diputados pri, PRI,josé luis toledo medina" class="imgSlider">
                                </div>
                                <div class="item">
                                    <img src="img/slider/epn,chanitoledo,monroy.png" alt="Enrique Peña Nieto, Chanito Toledo, Carolina Monroy" class="imgSlider">
                                </div>
                                <div class="item">
                                    <img src="img/slider/chanito-toledo-carolina-monroy.png" alt="chanito toledo, carolina monroy,PRI" class="imgSlider">
                                </div>
                                <div class="item">
                                    <img src="img/slider/cesar-camacho.png" alt="josé luis chanito toledo,chanito toledo,cesar camancho,PRI" class="imgSlider">
                                </div>
                                <div class="item">
                                    <img src="img/slider/familiaToledo.png" alt="josé luis toledo medina,chanito toledo,daniela vara, familia toledo" class="imgSlider">
                                </div>
                                <div class="item">
                                    <img src="img/slider/jose-luis-chanito-toledo,pablo-gamboa-mine.png" alt="jose luis toledo medina, chanito toledo, pablo gamboa mine,PRI" class="imgSlider">
                                </div>
                                <div class="item">
                                    <img src="img/slider/EPN,chanito-toledo.png" alt="Enrique Peña Nieto,chanito toledo,PRI" class="imgSlider">   
                                </div>
                                <div class="anchocustom">
                                    <section id="iconosIntro" class="wow animated bounceInDown" data-wow-delay="2s" >
                                        <div class="iconosRedes"><div class="iconofacebook"></div></div>
                                        <div class="iconosRedes"><div class="iconotwitter"></div></div>
                                        <div class="iconosRedes"><div class="iconoyoutube"></div></div>
                                        <div class="iconosRedes"><div class="iconogoogleplus"></div></div>
                                        <div class="iconosRedes"><div class="iconoinstagram"></div></div>
                                    </section>
                                </div>
                            </div>

                        </div>

                      <!-- Left and right controls -->
                      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
            </div>
            <div class="secciones blog">
                <div class="container">
                    <div class="row">
                        <h1 id="tituloBlog">José Luis Toledo Medina</h1>
                        <h2 id="subtituloBlog">Chanito</h2>
                    </div>
                </div>
                <div class="container espacioContenido">
                    <?php include('blog.php'); ?>           
                </div>          
            </div>
        <?php include("footer.php"); ?>
        <!--Inician los archivos JS del Sitio-->
        <script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.smint.js"></script>    
        <script src="js/menuR.js"></script>
        <script>
            $(document).ready(function(){
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
    </section>
</body>
</html>

