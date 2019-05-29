<?php 
include('../common/utils.php');
//print_r($_SESSION['user']['USERNAME']);


if($_POST) {
	if (isset($_POST['name']) && isset($_POST['price']) && !empty($_POST['name']) && !empty($_POST['price'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];
		$admin=$_SESSION['user']['USERNAME'];
		$id=$_SESSION['user']['ID'];
        
		echo 'datos ingresados con exito' ,$name ,$price;
		echo $_SESSION['user']['USERNAME'];
		
		$sql_insert = "INSERT INTO producto
		(NOMBREP, USERNAME, ID, PRECIO)
		VALUES ('$name','$admin', '$id', '$price')";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../adminstrador.php');
		}
	} else {
		redirect('../adminstrador.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../adminstrador.php');
}