<?php
	if(isset($_POST['submit'])){
		$username = $_POST['usuario'];
		$password = $_POST['contraseña'];
		if(empty($username) || empty($password)){
			echo '<div class="error">Nombre o contraseña incorrectos o vacios</div>';
		}else{
			$user = new User;
			if($user->getUser($username,$password)){
				//session_start();
				$_SESSION['usu'] = $username;
				//header('Localtion:Vista/usuario.php');
				echo '<meta http-equiv="refresh" content="0;url=Vista/usuario.php">';
			}else{
				echo '<div class="error">El usuario no existe</div>';
			}
		}
	}

?>