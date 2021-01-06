<?php
	if(isset($_POST['submit'])){
		$username = $_POST['usuario'];
		$password = $_POST['contraseña'];
		if(empty($username) || empty($password)){
			echo '<div class="error">Nombre o contraseña incorrectos o vacios</div>';
		}else{
			$user = new User;
			if($user->getUser($username,$password)){
				$variable = $user->getSesion($username,$password);
				//echo (string)$variable;
				$_SESSION['usu'] = $variable;
				echo '<meta http-equiv="refresh" content="0;url=Vista/Alumno.php">';
			}else{
				echo '<div class="error">El usuario no existe</div>';
			}
		}
	}

?>