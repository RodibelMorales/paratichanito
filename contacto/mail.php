<?php
$compara1=$_POST['asunto'];
$compara2="Propuesta de Ley";

if($compara1==$compara2){	
		$para='juridico@visionquintanaroo.com';
		echo $asunto=$_POST['asunto'];
		$mensaje=
		'<h3>Nombre:</h3>'.$_POST['nombre'].'<h3>Apellido Paterno:</h3>'.$_POST['paterno'].'<h3>Apellido Materno:</h3>'.$_POST['materno'].'
			<h3>Numero Telefonico:</h3>'.$_POST['numtelefono'].'
			<h3>Comunidad y dirección:</h3>'.$_POST['provinciaList'].','.$_POST['localidadList'].'
			<h3>Dirección</h3>'.$_POST['direccion'].'<h3>Mensaje</h3>'.$_POST['mensaje'].'';
		
		$headers="MIME-version: 1.0\r\n";
		$headers.="Content-type:text/html; charset=utf8\r\n";
		$headers.="From: ".$_POST['nombre']." ".$_POST['paterno']." <".$_POST['correo'].">\r\n";
		$headers.="Bcc:redes@quintanaroo.uno";
		if (mail($para, $asunto, $mensaje, $headers)) {
				echo "<script type='text/javascript'>alert('Mensaje enviado con exito,gracias por tu propuesta');
						document.location.href='index.php'
		  			  </script>";
			}
			else {
				echo "<script type='text/javascript'>alert('Ocurrio un error al enviar el mensaje intentelo mas tarde');
						document.location.href='index.php'
		  			  </script>";
			}
}
else{

	if ($compara1=="Agendar una Cita") {	
		$to='particular@visionquintanaroo.com , rpublicas@visionquintanaroo.com , aapv83@gmail.com, c.rpublicas@visionquintanaroo.com';
		$subject=$_POST['asunto'];
		
		$message=
		'<h3>Nombre:</h3>'.$_POST['nombre'].'<h3>Apellido Paterno:</h3>'.$_POST['paterno'].'<h3>Apellido Materno:</h3>'.$_POST['materno'].'
	
			<h3>Numero Telefonico:</h3>'.$_POST['numtelefono'].'
			<h3>Comunidad y dirección:</h3>'.$_POST['provinciaList'].','.$_POST['localidadList'].'
			<h3>Dirección</h3>'.$_POST['direccion'].'<h3>Mensaje</h3>'.$_POST['mensaje'].'';

		$headers="MIME-version: 1.0\r\n";
		$headers.="Content-type:text/html; charset=utf8\r\n";
		$headers.="From: ".$_POST['nombre']." ".$_POST['paterno']." <".$_POST['correo'].">\r\n";
		$headers.="Bcc:redes@quintanaroo.uno";
		if (mail($to, $subject, $message, $headers)) {
				echo "<script type='text/javascript'>alert('Mensaje enviado con exito');
						document.location.href='index.php'
		  			  </script>";
			}
			else {
				echo "<script type='text/javascript'>alert('Ocurrio un error al enviar el mensaje intentelo mas tarde');
						document.location.href='index.php'
		  			  </script>";
			}
	}
	else{
		if ($compara1=="Otros") {
			$to='quintanaroogestion@gmail.com';
			$subject=$_POST['asunto'];
			$message=
				'<h3>Nombre:</h3>'.$_POST['nombre'].'<h3>Apellido Paterno:</h3>'.$_POST['paterno'].'<h3>Apellido Materno:</h3>'.$_POST['materno'].'	
				<h3>Numero Telefonico:</h3>'.$_POST['numtelefono'].'
				<h3>Comunidad y dirección:</h3>'.$_POST['provinciaList'].','.$_POST['localidadList'].'
				<h3>Dirección</h3>'.$_POST['direccion'].'<h3>Mensaje</h3>'.$_POST['mensaje'].'';

			$headers="MIME-version: 1.0\r\n";
			$headers.="Content-type:text/html; charset=utf8\r\n";
			$headers.="From: ".$_POST['nombre']." ".$_POST['paterno']." <".$_POST['correo'].">\r\n";
			$headers.="Bcc:redes@quintanaroo.uno";
			if (mail($to, $subject, $message, $headers)) {
				echo "<script type='text/javascript'>alert('Mensaje enviado con exito');
						document.location.href='index.php'
		  			  </script>";
			}
			else {
				echo "<script type='text/javascript'>alert('Ocurrio un error al enviar el mensaje intentelo mas tarde');
						document.location.href='index.php'
		  			  </script>";
			}
		}
		

//publicas@visionquintanaroo.com


	}

}

?>