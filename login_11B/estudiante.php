<!DOCTYPE html>
<html lang="es">
<head>
	<title> Estudiante </title>
	<meta charset="utf-8">
</head>
<body>

<h1> PANEL DEL ESTUDIANTE </h1>
<h1> Hola, Estudiante </h1>


<?php 
 
 echo $_SESSION['nombre'];
 echo "<br> Es un estudiante<br>";

?>

<a href="">Cambiar contraseña</a><br>
<a href="cerrar_sesion.php"> cerrar sesion</a>
</body>
</html>