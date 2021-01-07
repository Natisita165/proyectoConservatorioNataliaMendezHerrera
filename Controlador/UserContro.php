<?php
	if(isset($_POST['submit'])){
		$username = $_POST['usuario'];
		$password = $_POST['contraseña'];
		//$firsti=strtok(string ($username), string ('.'));
		//$secondi=strtok(string ('.'));

		if(empty($username) || empty($password)){
			echo '<div class="error">Nombre o contraseña incorrectos o vacios</div>';
		}else{
			$user = new User;
			if($user->getUser($username,$password)){
				if($user->getIdentifire($username,$password) == 'ACA'){
					$_SESSION['usu'] = $user->getSesionAlumnoACA($username,$password);
					echo '<meta http-equiv="refresh" content="0;url=Vista/Alumno.php">';
				}else if($user->getIdentifire($username,$password) == 'MOD'){
						$_SESSION['usu'] = $user->getSesionAlumnoMOD($username,$password);
						echo '<meta http-equiv="refresh" content="0;url=Vista/Alumno.php">';
					}else if($user->getIdentifire($username,$password) == 'PRO'){
							$_SESSION['usu'] = $user->getSesionProfesor($username,$password);
							echo '<meta http-equiv="refresh" content="0;url=Vista/Profesor.php">';
						}else{
							$_SESSION['usu'] = $user->getSesionAdmi($username,$password);
							echo '<meta http-equiv="refresh" content="0;url=Vista/Administrativo.php">';
						}
				//$_SESSION['usu'] = $username;
				//echo '<meta http-equiv="refresh" content="0;url=Vista/Alumno.php">';
			}else{
				echo '<div class="error">El usuario no existe</div>';
			}
		}
	}

?>