<?php
include_once 'db.php';
	class User extends DB{
		public function getUser($user,$pass){
			$sql = "SELECT * FROM Administrativo where nombre = '$user' and contraseña = '$pass'";
			$result = $this->connect()->query($sql);
			$numrows = $result->num_rows;
			if($numrows == 1){
				return true;
			}else{
				return false;
			}
		}
	}


?>