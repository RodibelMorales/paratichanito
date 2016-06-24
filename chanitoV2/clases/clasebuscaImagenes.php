<?php
class FiltroImagenes{
   public $fecha_evento;
   public $municipios_id_m;
   public $img_Evento;

	public function filtroPictures(){
	 $serch= mysql_query("SELECT * FROM fotos WHERE fecha_evento = '{$this->fecha_evento}' AND municipios_id_m = '{$this->municipios_id_m}'");
	 if (mysql_num_rows($serch)>0) {
	 	
	 	while ($serchResult = mysql_fetch_array($serch)) {
	 		$url = "chanitoV2/BancoImagenes/".$this->img_Evento= $serchResult['img_Evento']."";
	 		$eventoFacebook="window.open('http://www.facebook.com/sharer.php?u=https://www.chanitoledo.com/".$url.".php/','ventanacompartir','toolbar=0','status=0','width=650','height=450'); ";
	 		$textoTwitt="&text=Mi%20Foto%20con%20ChaniToledo";
	 		$eventoTwitter="window.open('http://twitter.com/share?url=http://www.example.com/".ltrim($textoTwitt)."','ventanacompartir','toolbar=0','status=0','width=650','height=450');";

	 			echo "<div class='itemMulti wow animated bounceIn' data-wow-delay='0.5s'>";
	 				echo "<a class='OpenGalery' href='".$url."' data-gallery>";
	 					echo "<img class='img-responsiveMultimedia' id='urlImagen' src='".$url."'\" data-highres=\"chanitoV2/BancoImagenes/".$this->img_Evento= $serchResult['img_Evento']."\" alt=".$this->img_Evento=$serchResult['tituloImagen']."> ";
	 				echo "</a>";
	 				echo 	"	<div class='opcionesMUltimedia'>
	 								<div class='divDescarga'>
	 										<a class='btn btnDescargas' href='descargaImagenes.php?file=".$this->img_Evento= $serchResult['img_Evento']."'>
	 										<i class='fa fa-download espacioIcono'></i>Descargar</a>
	 								</div>
	 								<div class='divShareFace'>
	 									<a href='javascript: void(0);' onclick=".$eventoFacebook." class='btn btnShareFacebook'><i class='fa fa-facebook-official espacioIcono'></i>Compartir</a>
	 								</div>
	 								<div class='divShareTwitt'>
	 									<a href='https://twitter.com/share' class='btn btnShareTwitter' data-url='http://www.chanitoledo.com/mifotoconchanito' data-text='Ya tengo mi foto Descarga la tuya en:' data-size='large' data-related='JLToledoM' data-hashtags='ParaTiChanito'><i class='fa fa-twitter-square espacioIcono'></i>Tweet</a>
										<!--twitter-share-button -->
	 								</div>
	 							</div>
	 					  	";
	 			echo "</div>";
	 	}
	 	
	 }else{
	 	echo "
	 	 	<div class='modal fade' id='errorPage' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
			    <div class='modal-dialog modal-lg'>
			      <div class='modal-content'>
			        <div class='modal-header'>
			          <button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
			          <div class='modal-body'>
			          	<div class='row'>
			          		<div class='col-md-3'><img src='chanitoV2/img/warning.png' class='img-responsive'></div>
							<div class='col-md-9'><h2>No se encontraron imagenes disponibles</h2></div>
			          	</div>
			          </div>
			          <div class='modal-footer'>
			            <a href='multimedia-chanito-toledo.php' class='btn' id='btnNuevaBusqueda' data-dismiss=''>Nueva Busqueda</a>
			          </div>
			        </div>
			      </div>
			    </div>
  			</div>

	 	";
	 }


	 mysql_error();
	 mysql_free_result($serch);
	 mysql_close();
	}
	
}

?>