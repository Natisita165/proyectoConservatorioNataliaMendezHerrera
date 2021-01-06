<?php

session_start();
$sesionusu = $_SESSION['usu'];
include '../Modelo/db.php';
include '../Modelo/AlumnoModel.php';
include '../Modelo/UserModel.php';
include '../Controlador/UserContro.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>INICIO</title>
	<link rel="icon" href="../conserlogo.png">
	<link rel="stylesheet" href="../css/AlumnoHome.css">
</head>
<body background="../IMG/logoagua.png">
	<section class="botonesI">
		<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="../IMG/usuarioF.png" width="100" height="100" alt="" />
			<li></li>
			<?php  // $user = new User; echo ($user->getSesion($username,$password)); ?>
		</div>
		<div id="menu">
			<ul>
				<li><a href="#">Información Alumno</a></li>
				<li><a href="#" accesskey="2" title="">Materias</a></li>
				<li><a href="#" accesskey="3" title="">Notas</a></li>
				<li><a href="#" accesskey="4" title="">Estado de Pago</a></li>
				<li class="current_page_item"><a href="#" accesskey="5" title="">Principal</a></li>
				<li><a href="#" accesskey="6" title="">LogOut</a></li>
			</ul>
		</div>
	</div>
	<div id="welcome">
			<div class="title">
				<h2>Bienvenido al sistema del Conservatorio</h2>
			</div>
		</div>
	<div id="main">
		
			<ul class="style1">
				<li class="first">
					<h3>ANUNCIO</h3>
					<p><a href="#">Convocatoria
3ra convocatoria para la validación total de estudioas. Estudios de los niveles técnico medio, tecnico superior y licenciatura llenar el siguiente formulario:</a></p>
				</li>
			</ul>	
</div>

</div>
</section>
</body>
</html>