<?php 
include('common/utils.php');
//print_r($_SESSION['user']['USERNAME']);

?>
<!DOCTYPE html>
<html>
<head>
	<title>Adminstrador</title>
</head>
<body>
	<h1>Administrador</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
<?php echo $_SESSION['user']['USERNAME'];?>
	<form action="php/ValidarProducto.php" method="post">
		<div>
			<label>Nombre del producto</label>
			<input type="text" name="name" required="required">
		</div>
        <div>
			<label>Precio del producto</label>
			<input type="text" name="price" required="required">
		</div>
		<div>
			<button>Registrar producto</button>
		</div>
        <div><h2>Productos registrados</h2></div>
        <div>
        <table border =3px>
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
			</tr>
		</thead>

		<tbody>
		</tbody>
	</table>
        </div>
        <div>
        <h2>Lista de pedidos de clientes</h2>
        </div>
        <div>
        <table border =3px>
		<thead>
			<tr>
				<th>Cliente</th>
				<th>Producto</th>
                <th>Cantidad</th>
                <th>Precio</th>
			</tr>
		</thead>

		<tbody>
		</tbody>
	</table>
        </div>
	</form>
</body>
</html>