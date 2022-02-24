<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$datos = array("nombre" => array("Nombre: Javier"), "apellidos" => array("Apellido: Zarate","Apellido: Zamarripa"), "edad" => array("Edad: 21"), "numero" => array("Telefono: 4731202575"));

echo ($datos["nombre"][0]);
echo "<br>";
echo ($datos["apellidos"][0]);
echo "<br>";
echo ($datos["edad"][0]);
echo "<br>";
echo ($datos["numero"][0]);
echo "<br>";
?>
<div id="una capa">
<a href="MiSitioWeb">Regresar al menu</a>	
</div>
</body>
</html>