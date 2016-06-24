<?php 
class ControlSesiones{
	//variables optenidos de la tabla usuarios
	public $idUsuarios;
	public $imgperfil;
	public $nombre;
	public $a_Paterno;
	public $a_Materno;
	public $user;
	public $password;
	public $tipoUsuario;
	public $activo;
	//variables de la tabla Fotos
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
		public function inicioSesion(){
			$consultaSesiones = mysql_query("SELECT * FROM usuarios WHERE user = '{$this->user}'");
			if ($row = mysql_fetch_array($consultaSesiones)) {
				$this->tipoUsuario = $row['tipoUsuario'];
				$this->nombre = $row['nombre'];
				$this->a_Paterno = $row['a_Paterno'];
				if($row['password'] == $this->password){
					session_start();
					$_SESSION['usuario'] = $this->user;
					switch ($this->tipoUsuario) {
						case 'Administrador':
							$_SESSION['tipoUser'] = $this->tipoUsuario;
							header("Location: ../paneladmin.php");
							break;
						
						case 'Usuario':
							$_SESSION['tipoUser'] = $this->tipoUsuario;
							header("Location: ../paneluser.php");
							break;
					}
					$Online = mysql_query("UPDATE usuarios SET activo ='1' WHERE user = '{$this->user}' ");
				}
				else{
					echo "<script language='JavaScript'> alert('Usuario y/o Contraseña invalidos'); window.location='../login.php';</script>";
				}
			}
			else{
					echo "<script language='JavaScript'> alert('Usuario y/o Contraseña invalidos'); window.location='../login.php';</script>";
			}
				mysql_free_result($consultaSesiones); //liberar memoria
				mysql_close(); //Cerrar Conexion con el servidor
		}
		public function cerrarSesion(){
				session_start();
				$_SESSION = array();
				$updateUserStatus=mysql_query("UPDATE usuarios SET activo='0' WHERE user = '{$this->user}'  ");
				session_destroy();
				header("Location: ../login.php");
				mysql_close($updateUserStatus);
		}
		public function usuarioEnLinea(){
			$VerUsuarioEnLinea = mysql_query("SELECT * FROM usuarios where activo='1' and tipoUsuario = 'Usuario';");
			while ($Ruser = mysql_fetch_assoc($VerUsuarioEnLinea)) {
				$this->Rusers[] = $Ruser;
			}
			return $this->Rusers;
			mysql_free_result($VerUsuarioEnLinea);
			mysql_close();
		}
		public function NuevoUsuario(){
			$comparaUser = mysql_query("SELECT user FROM usuarios WHERE user ='{$this->user}'");
			if (mysql_num_rows($comparaUser)>0) {
				echo "<script language='JavaScript'> alert('El usuario que has ingresado ya existe!!'); window.location='../paneladmin.php';</script>";
			}
				else{
					$queryNuevoUsuario= "INSERT INTO usuarios(nombre,imgperfil,a_Paterno,a_Materno,user,password,tipoUsuario) 
								VALUES('{$this->nombre}','{$this->imgperfil}','{$this->a_Paterno}','{$this->a_Paterno}','{$this->user}','{$this->password}','{$this->tipoUsuario}')";
					$CreaUsuario = mysql_query($queryNuevoUsuario);
					if ($CreaUsuario) {
							echo "<script language='JavaScript'> alert('Se ha creado un nuevo usuario correctamente'); window.location='../paneladmin.php';</script>";
					}	
						else{
							echo "<script language='JavaScript'> alert('Ha ocurrido un error intentalo nuevamente'); window.location='../paneladmin.php';</script>";
						}
			}
			mysql_free_result($comparaUser);
			mysql_close();
		}
		public function DatosUsuario(){
			$DatosUsuario= mysql_query("SELECT * FROM usuarios WHERE user = '{$this->user}'");
				while ($resultadoConsulta = mysql_fetch_array($DatosUsuario)) {
					$this->idUsuarios 	= $resultadoConsulta['idUsuarios'];
					$this->imgperfil	= $resultadoConsulta['imgperfil'];
					$this->nombre		= $resultadoConsulta['nombre'];
					$this->a_Paterno 	= $resultadoConsulta['a_Paterno'];
					$this->a_Materno  	= $resultadoConsulta['a_Materno'];
				}
				mysql_free_result($DatosUsuario);
				mysql_close();
		}
		public function HistorialUsuario(){
			$HistoricoUser = mysql_query("SELECT * FROM fotos WHERE Usuarios_idUsuarios ='{$this->idUsuarios}'");
				echo "<section class='row text-center'>";
				if (mysql_num_rows($HistoricoUser)>0) {
					while ($Rhistorico = mysql_fetch_array($HistoricoUser)) {
					echo "<div class='col-md-3'>";
							echo "<div class='thumbnail'>";
								echo "<a href=''><img class='img-responsive'  src=\"BancoImagenes/".$this->img_Evento=$Rhistorico['img_Evento']."\"></a>";
									echo "<div class='caption'>";
										echo "<h3>".$this->tituloImagen=$Rhistorico['tituloImagen']."</h3>";
										echo "<p>".$this->descripcion_Evento= $Rhistorico['descripcion_Evento']."</p>";
									echo "</div>";
									echo "<a data-id =".$this->id_f  = $Rhistorico['id_f']." class='btn btn-link delete' >eliminar</a>";
									echo "<button type='button' href='../envioPOST/updateDatosIMG?id_f=".$this->id_f = $Rhistorico['id_f']."' class='btn btn-success' data-togle='modal' data-target='#updateIMG'>Modificar</button>";
							echo "</div>";
					echo "</div>";	
					}
				}
				else{
					echo "<h3>Sin Historial Fotografico</h3>";
				}

				echo "</section>";
			mysql_free_result($HistoricoUser);
			mysql_close();
		}
		public function HistorialIDuser(){
			$RecibeUsuario= mysql_query("SELECT * FROM usuarios WHERE user ='{$this->user}'");
				if ($idUSER= mysql_fetch_array($RecibeUsuario)) {
					$this->idUsuarios = $idUSER['idUsuarios'];
					$MuestraImagenesUser = mysql_query("SELECT * FROM fotos WHERE Usuarios_idUsuarios =  '{$this->idUsuarios}' ");
				while ($imgID = mysql_fetch_array($MuestraImagenesUser)) {
					echo "<div class='text-center'>";
						echo "<div class='col-md-4 col-sm-4 hero-feature'>";

								echo "<div class='thumbnail'>";
									echo "<img src=\"BancoImagenes/".$this->img_Evento = $imgID['img_Evento']."\">";
									echo "<div class='caption'>";
										echo "<h3>".$this->tituloImagen = $imgID['tituloImagen']."</h3>";
									echo "</div>";
								echo "</div>";
						echo "</div>";
					echo "</div>";
						}
				}
				mysql_free_result($RecibeUsuario);
				mysql_free_result($MuestraImagenesUser);
				mysql_close();
		}
}
?>