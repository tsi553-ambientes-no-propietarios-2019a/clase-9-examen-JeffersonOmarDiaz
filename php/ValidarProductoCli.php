<?php 
include('../common/utils.php');

if($_POST) {
	if (isset($_POST['type']) && isset($_POST['cantidad']) && !empty($_POST['type']) && !empty($_POST['cantidad'])) {
		$Producto = $_POST['type'];
        $cantidad = $_POST['cantidad'];
        
        echo 'PRODUCTOS ingresados con exito' ,$Producto,'  ' ,$cantidad;
		/*$sql_insert = "INSERT INTO product
		(code, name, type, stock, price, user)
		VALUES ('$code','$name', '$type', '$stock', '$price', '$user')";

		echo $sql_insert;
		$conn->query($sql_insert);

		if ($conn->error) {
			echo 'Ocurrió un error ' . $conn->error;
		} else {
			redirect('../cliente.php');
        }*/
	} else {
		redirect('../cliente.php?error_message=Ingrese todos los datos!');
	}
} else {
	redirect('../cliente.php');
}