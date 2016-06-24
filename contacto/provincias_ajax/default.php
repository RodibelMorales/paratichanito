<html>
<head>
<title>Selector dinámico Ajax provincias y localidades de  España</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script src="js/AjaxCode.js"></script>
</head>
<body>
Seleccione su provincia:
<select name="provinciaList" id="provinciaList" onChange="return provinciaListOnChange()">
<option >Seleccione su provincia...</option>		
<?php
$xml = simplexml_load_file('provinciasypoblaciones.xml');
$result = $xml->xpath("/lista/provincia/nombre | /lista/provincia/@id");
for ($i=0;$i<count($result);$i+=2) 
{
$e=$i+1;
$provincia=UTF8_DECODE($result[$e]);
echo("<option value='$result[$i]'>$provincia</option>");
}
?>
</select>

	<br>
	<br>
Seleccione su localidad:
	<select name="localidadList" id="localidadList" >
<option >Seleccione antes una provincia</option>
	</select> <span id="advice"> </span>
</body>
</html>