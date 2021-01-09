<?php

session_start();
$_SESSION['usu']=-1;

//$sesionusu = $_SESSION['usu']; 


include 'Modelo/db.php';
include 'Modelo/UserModel.php';
include 'Controlador/UserContro.php';
?>

<!DOCTYPE html>
<head>
<html lang="es">
<meta charset="UTF-8">
	<meta name="viewport">
	<title>LOGIN</title>
	<link rel="icon" href="IMG/conserlogo.png">
	<link rel="stylesheet" href="css/login.css">
<body><div>
	<div class="fondo" >
	<img class="logo" src="IMG/logol.jpg" width="250" height="250">
	<table class="letras">
    <tbody><tr><td style=" height: 33%;"><h4 style="">Conservatorio</h4></td></tr>
    	<tr><td style="height: 33%;"><h4 style="position: absolute;">Plurinacional</h4></td></tr>
    	<tr><td style="height: 60%;padding-top: 20px !important;"><h4 style="position: absolute;">de Música</h4></td></tr>
    	</tbody></table>
	<img class="logo2" src="IMG/conserlogo.png" width="100" height="100"></img>
	</div>
	<div class="ingreso"><form action="" method="post">
		<h2>Bienvenido al Sistema Académico del Conservatorio</h2>
		<p>Nombre de Usuario:  <input type="text" placeholder="" name="usuario"></p>
		<p>Contraseña:         <input type="password" placeholder="" name="contraseña"></p>
		<input class="button" type="submit" name="submit" value="Ingresar">
    </form></div>
</div>
</body>
</html>