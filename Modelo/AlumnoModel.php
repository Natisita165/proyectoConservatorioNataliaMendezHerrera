<?php
	class Alumno extends DB{
		public function alumnoUsuario($user){
			$sql1 = "SELECT idAdministrativo FROM Administrativo where nombre = '$user'";
			$result1 = $this->connect()->query($sql1);
			$sql2 = "SELECT * FROM Alumno where idAlumno = $result1";
			$result2 = $this->connect()->query($sql2);

			return $result2;

		}
		function editarAlumno(){
			
		}
	}



?>