<?php 
include('../common/utils.php');

if($_POST) {
    if (isset($_POST['username']) && isset($_POST['type']) && isset($_POST['password']) && isset($_POST['passwordR']) 
    && !empty($_POST['username']) && !empty($_POST['type']) && !empty($_POST['password']) && !empty($_POST['passwordR'])) {
        $username = $_POST['username'];
        $rol = $_POST['type'];
        $password = $_POST['password'];
        
        if($password == $_POST['passwordR']){
			echo 'las claves coninciden';
//sql para el registro de usuarios
			$sql_insert = "INSERT INTO user
			(USERNAME, TYPE, PASSWORD)
			VALUES ('$username','$rol', MD5('$password'))";
	
			echo $sql_insert;
			$conn->query($sql_insert);
	
			if ($conn->error) {
				echo 'Ocurrió un error ' . $conn->error;
			} else {
				echo 'Registrado con exito ';
				redirect('../index.php');
			}

			return;
        }else{
			echo 'las claves NO coninciden';
			redirect('../registro.php?error_message=Las claves no coinciden !');
        }
	} else {
		redirect('../registro.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../registro.php');
}