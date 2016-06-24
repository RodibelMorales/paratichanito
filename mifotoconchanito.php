<!doctype html>
<html>
<head>
	<title>José Luis Chanito Toledo | #MiFotoConChanito</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/> 
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <meta name="Description" content="Diputado Federal Por Quintana Roo | José Luis Chanito Toledo">
    <meta name="keywords" content="Mi foto con chanito toledo, fotos chanito toledo, JLTM, galeria chanito, multimedia chanito toledo, fotos jose luis toledo medina, jose luis toledo medina,chanito toledo">
	  <?php include('header/head.php'); ?>
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="css/bootstrap-image-gallery.min.css">
</head>
<body>
  <section class="contenedorGeneral">
    <header id="headerMultimediaFiltroBuscaImagenes">
      <?php include('header.php'); ?>
    </header>
    <?php include('modalConsultaCuidadana.html'); ?>
    <section class="contenedorMultimediafiltro">
                <div id="contenedorSlider">
                    <button class="botonF1beforeScroll" data-toggle="modal" data-target="#modalNuevaBusqueda">
                      <i class="fa fa-search iconoBtnModal"></i>
                    </button>
                    <div id="modalNuevaBusqueda" class="modal fade" role="dialog">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                              </div>
                              <div class="modal-body">
                                    <div id="formularioBusquedaFiltro">
                                        <div id="tituloMultimediaFiltro">Mi Foto Con </div><div id="chanitoMultimediaFiltro"></div>
                                        <form class="form-inline formFiltro" method="POST" role="form" action="buscaImagenes.php">
                                          <div class="form-group">
                                            <select name="municipioFiltro" class="form-control" id="selectfiltroMultimedia" required>
                                                <option disable value=""> Seleccione un opción</option>
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
                                            <input name="fechaFiltro" type="text" class="form-control" id="inputfiltroMultimedia" autocomplete="off">
                                          </div>
                                          <button type="submit" id="btnSearch"class="btn btn-success"><span class="fa fa-search"></span></button>
                                        </form>
                                    </div>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btnSalirFiltro" data-dismiss="modal"><i class="fa fa-times-circle-o espacioIcono "></i>Cerrar</button>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
                <div id="galeriaChanito">
                  <div class="anchoColumna"></div>
                  <?php 
                    include('chanitoV2/clases/contenedorClasesGral.php');
                    $serchimg = new FiltroImagenes();
                      if ($_POST) {
                        $serchimg->fecha_evento =   $_POST['fechaFiltro'];
                        $serchimg->municipios_id_m = $_POST['municipioFiltro'];
                        $serchimg->filtroPictures();
                    }else{
                      echo "
                        <div class='noResultados'>
                          <img id='fotoNotFound' src='img/notfound.png'>
                          <h1 class='tituloError'>No se encontro ninguna fotografia, Intenta una nueva Busqueda</h1>
                        </div>
                        ";
                    }
                  ?>
                  <div id="blueimp-gallery" class="blueimp-gallery">
                      <div class="slides"></div>
                      <h3 class="title"></h3>
                      <a class="prev">‹</a>
                      <a class="next">›</a>
                      <a class="close">×</a>
                      <a class="play-pause"></a>
                      <ol class="indicator"></ol>
                      <div class="modal fade">
                          <div class="modal-dialog modal-lg modalGaleria">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <button type="button" class="close" aria-hidden="true">&times;</button>
                                      <h4 class="modal-title">Mi Foto con Chanito </h4>
                                  </div>
                                  <div class="modal-body next"></div>
                                  <div class="modal-footer">
                                      <button type="button" class="btn btnFancyGaleriaBefore pull-left prev">
                                          <i class="glyphicon glyphicon-chevron-left"></i>
                                          Anterior
                                      </button>
                                      <button type="button" class="btn btnFancyGaleriaNext next">
                                          Siguiente
                                          <i class="glyphicon glyphicon-chevron-right"></i>
                                      </button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                </div>      
    </section>
    <?php include('footer.php'); ?>
  </section>

    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/jquery.smint.js"></script>
    <script src="js/galeria.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/optimizaImagenes.js"></script>
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="js/modalGaleria.js"></script>
    <script src="js/menuR.js"></script>
    <script>
        $(window).load(function(){
            $('#errorPage').modal('show');
            $('#galeriaChanito').imagesLoaded(function(){
              $('#galeriaChanito').masonry({
                  itemSelector:".itemMulti",
                  columnWidth: ".anchoColumna",
              });
            });
        });    
        $(document).ready(function(){
            $('#inputfiltroMultimedia').datepicker({
              format: "yyyy-mm-dd"
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
            if ($(window).scrollTop() + $(window).height() > $('.piePagina').offset().top) {
              $('.botonF1beforeScroll').addClass('botonF1AfterScroll');
            } else {
             $('.botonF1beforeScroll').removeClass('botonF1AfterScroll');
            }
        });
    </script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
  </section>
	
</body>
</html>



