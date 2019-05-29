<?php 
include('../common/utils.php');
if($_POST) {
	if (isset($_POST['username']) && isset($_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT *
		FROM user
		WHERE username='$username'
		AND password=MD5('$password')";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../index.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		if($res->num_rows > 0) {
				while ($row = $res->fetch_assoc()) {
					$_SESSION['user'] = [
						'USERNAME' => $row['USERNAME'],
						'TYPE' => $row['TYPE']
                    ];
                    if($_SESSION['user']['TYPE']=='Administrador'){
                        redirect('../adminstrador.php');
                    }else{
                        echo $_SESSION['user']['TYPE'];
					    redirect('../cliente.php');
                    }
				}
		} else {
			redirect('../index.php?error_message=Usuario o clave incorrectos!');
		}


	} else {
		redirect('../index.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../index.php');
}