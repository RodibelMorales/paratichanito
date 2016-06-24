<?php 
class updownImagenUSER{
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

		public function subeImagenUser(){
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
				echo "<script language='JavaScript'> alert('Imagen guardada correctamente'); window.location='../paneluser.php';</script>";
			}else{
				echo "<script language='JavaScript'> alert('Error al guardar la imagen'); window.location='../paneluser.php';</script>";
			}
			mysql_close();
		}

}
?>