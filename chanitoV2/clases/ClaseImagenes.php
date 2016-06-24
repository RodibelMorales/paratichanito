<?php 
class updownImagen{
//Variables de la tabla fotos
		public $id_f;
		public $tituloImagen;
		public $fecha_evento;
		public $municiopio_Evento;
		public $localidadColonia;
		public $descripcion_Evento;
		public $img_Evento;
		public $Usuarios_idUsuarios;
		public $municipios_id_m;
//variables de la tabla usuarios
		public $idUsuarios;
		public $nombre;
		public $a_Paterno;
		public $a_Materno;
		public $user;
		public $password;

		public function subeImagen(){
			$subeImage="INSERT INTO fotos(tituloImagen,fecha_evento,localidadColonia,descripcion_Evento,img_Evento,Usuarios_idUsuarios,municipios_id_m)
			VALUES 
			('{$this->tituloImagen}',
				'{$this->fecha_evento}',
				'{$this->localidadColonia}',
				'{$this->descripcion_Evento}',
				'{$this->img_Evento}',
				'{$this->Usuarios_idUsuarios}',
				'{$this->municipios_id_m}')";
			$insertaImagen= mysql_query($subeImage);
			if($insertaImagen){
				echo "<script language='JavaScript'> alert('Imagen guardada correctamente'); window.location='../paneladmin.php';</script>";
			}
			else{
				echo "Error al guardar la imagen";		
			}
			mysql_close();
		}
		public function actualizarImagen(){
		}
		public function eliminarImagen(){
		}
		public function MuestraImagenIDusers(){ //esta funcion se empezara a usar al finalizar la impresion de la info de cada usuario
			$consulta ="SELECT * FROM fotos WHERE Usuarios_idUsuarios = 1";
			$ejecutaConsulta = mysql_query($consulta);
		}
		public function MuestraUsuarios(){
			$consultaMuestraUser = "SELECT * FROM usuarios";
			$RealizaConsultaMuestraUser = mysql_query($consultaMuestraUser);

			while ($resultadoConsulta = mysql_fetch_assoc($RealizaConsultaMuestraUser)) {
				$this->resultado[]=$resultadoConsulta;
			}
			return $this->resultado;
			mysql_free_result($RealizaConsultaMuestraUser);
			mysql_close();
		}
		public function HistorialIDuser(){
			$ImgidUser= mysql_query("SELECT * FROM fotos WHERE Usuarios_idUsuarios ='{$this->idUsuarios}'  ");
			echo "<section class='row text-center'>";
				while ($imgUser = mysql_fetch_array($ImgidUser)) {
					echo "<div class='col-md-3 col-sm-6 hero-feature'>";
						echo "<div class='thumbnail'>";
						echo "<a href=''><img class='img-responsive'  src=\"BancoImagenes/".$this->img_Evento=$imgUser['img_Evento']."\"></a>";
							echo "<div class='caption'>";
									echo "<h3>".$this->tituloImagen=$imgUser['tituloImagen']."</h3>";
									echo "<p>".$this->descripcion_Evento= $imgUser['descripcion_Evento']."</p>";
							echo "</div>";
						echo "</div>";
					echo "</div>";
				}
			echo "</section>";
			mysql_free_result($ImgidUser);
			mysql_close();
		}
}
?>