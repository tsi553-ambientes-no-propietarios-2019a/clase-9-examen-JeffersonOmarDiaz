<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'examen');

if($conn->connect_error) {
	echo 'Existió un error en la conexión ' . $conn->connect_error;
	exit;
}

function redirect($url) {
	header('Location: ' . $url);
	exit; 
}

function getProducts($conn) {
	$user_id = $_SESSION['user']['id'];

	//echo 'el id usuario es: ', $user_id;
	//echo 'el usuario es: ',$_SESSION['user']['username'];
	$sql = "SELECT *
		FROM product
		WHERE user='$user_id'";

		$res = $conn->query($sql);

		if ($conn->error) {
			redirect('../home.php?error_message=Ocurrió un error: ' . $conn->error);
		}

		$products = [];
		if($res->num_rows > 0) {
			while ($row = $res->fetch_assoc()) {
				$products[] = $row;
			}
		}

		return $products;
}
?>