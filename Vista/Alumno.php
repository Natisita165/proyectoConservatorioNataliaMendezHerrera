<?php

session_start();
$sesionusu = $_SESSION['usu'];
include '../Modelo/db.php';
include '../Modelo/AlumnoModel.php';
include '../Modelo/UserModel.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>INICIO</title>
	<link rel="icon" href="../IMG/conserlogo.png">
	<link rel="stylesheet" href="../css/AlumnoHome.css">
	<link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body background="../IMG/logoagua.png">
	<section class="botonesI">
		<div id="page" class="container">
	<div id="header">
		<div id="logo">
			<img src="../IMG/usuarioF.png" width="100" height="100" alt="" />
			<li></li>
			<?php // $user = new User; echo ($user->getSesion($username,$password));?>
		</div>
		<div id="menu">
			<ul>
				<li><a href="InfoAlumno.php" name="InfoAlum">Información Alumno</a></li>
				<li><a href="#" name="MateriaAlum">Materias</a></li>
				<li><a href="#" name="NotasAlum">Notas</a></li>
				<li><a href="#" name="PagoAlum">Estado de Pago</a></li>
				<li class="current_page_item"><a href="Alumno.php" name="HomeAlum">Principal</a></li>
				<li><a href="#" name="OutAlum">LogOut</a></li>
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
					<p>Para la nueva inscripción se solicita que sea precencial, por tanto deben pasar por secretaria para
					la inscrrpción debida a la nueva gestión 2021.</p>
				</li>
			</ul>	
</div>

</div>
</section>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>