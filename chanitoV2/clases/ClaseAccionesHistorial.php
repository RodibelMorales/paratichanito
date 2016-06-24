<?php 
class AccionesH{
	public $id_f;
	public $tituloImagen;
	public $fecha_evento;
	public $municiopio_Evento;
	public $localidadColonia;
	public $descripcion_Evento;
	public $img_Evento;
	public $Usuarios_idUsuarios;
	public $municipios_id_m;
	public $dato;

	public function eliminaImagen(){ //funcion encargada de eliminar el registro e imagen que se pase por id del historial por usuario.
		$deleteimgServidor = mysql_query("SELECT img_Evento FROM fotos WHERE id_f = '{$this->id_f}' ");
			if($diserver = mysql_fetch_array($deleteimgServidor)) {
				$nombreIMG = $this->img_Evento = $diserver['img_Evento'];
				unlink("../BancoImagenes/".$nombreIMG.""); //funcion de php que elimina la imagen del servidor
					$deleteIMG = mysql_query("DELETE  FROM fotos WHERE id_f= '{$this->id_f}'  ");
						if ($deleteIMG) {
							echo "<script language='JavaScript'> alert('La imagen se ha borrado correctamente!!'); window.location='../paneladmin.php';</script>";
						}else{
							echo "<script language='JavaScript'> alert('Ocurrio un error al eliminar la imagen!'); window.location='../paneladmin.php';</script>";
						}
			}
		mysql_free_result($deleteimgServidor);
		mysql_close();
	}
}

?>