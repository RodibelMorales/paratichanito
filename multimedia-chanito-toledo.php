<!doctype html>
<html>
<head>
	<title>José Luis Chanito Toledo | #MiFotoConChanito</title>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/> 
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1" />
    <meta name="Description" content="Diputado Federal Por Quintana Roo | José Luis Chanito Toledo">
    <meta name="keywords" content="Mi foto con chanito toledo, fotos chanito toledo, JLTM, galeria chanito, multimedia chanito toledo, fotos jose luis toledo medina, jose luis toledo medina,chanito toledo">
	<?php include("header/head.php"); ?>
</head>
<body>
        <header id="headerMultimedia">
    		<?php include("header.php"); ?>
    	</header>
        <?php include('modalConsultaCuidadana.html'); ?>
    		<section class="contenedorMultimedia">
                        <div id="formularioBusqueda">
                            <div id="tituloMultimedia">Mi Foto Con </div><div id="chanitoMultimedia"></div>
                            <form class="form-inline" method="POST" role="form" action="mifotoconchanito.php">
                              <div class="form-group">
                                <select name="municipioFiltro" class="form-control" id="selectfiltro" required>
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
                                <input name="fechaFiltro" type="text" class="form-control" id="inputfiltro" placeholder="Selecciona una fecha" required autocomplete="off">
                              </div>
                              <button type="submit" id="btnSearch" class="btn btn-success"><span class="fa fa-search"></span></button>
                            </form>
                        </div>

    		</section>
    	<?php include("footer.php"); ?>

    	<script src="bootstrap/js/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="js/jquery.smint.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/menuR.js"></script>
        <script>
            $(document).ready(function(){
                $('#inputfiltro').datepicker({
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
            });
        </script>
    
</body>
</html>