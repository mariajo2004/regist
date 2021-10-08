<?php
session_start();
if (isset($_SESSION['nombre'])){
	
}


?>



<!DOCTYPE html>
<html lang="es">
<head>
	<title> Usuario </title>
	<meta charset="utf-8">
</head>
<body>

<h1> PANEL DEL USUARIO </h1>
<h1> Hola, usuario </h1>


<?php 
 
 echo $_SESSION['nombre'];
 echo "<br> Es un usuario<br>";

?>

<a href="">Cambiar contraseña</a><br>
<a href="cerrar_sesion.php"> cerrar sesion</a>
</body>
</html>