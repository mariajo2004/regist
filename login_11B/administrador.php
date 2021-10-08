<?php
session_start();

if(isset($_SESSION['nombre']) && ($_SESSION['tipo']=='admin')){

}else{
	header("location:login.html");
	exit();

}


?>

<!DOCTYPE html>
<html>
<head>
	<title> Administrador </title>
</head>
<body>

<h1> PANEL DEL ADMINISTRADOR </h1>
<h1> Hola, Administrador</h1>

<?php 

echo $_SESSION['nombre'];
echo "<br> Es un administrador<br>";

?>
<a href="#"> Cambiar contraseña </a><br>
<a href="#"> Ingresar usuario </a><br>
<a href="cerrar_sesion.php"> cerrar sesion </a><br>


</body>
</html>