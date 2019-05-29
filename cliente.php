<!DOCTYPE html>
<html>
<head>
	<title>Cliente</title> 
</head>
<body>
	<h1>Cliente</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/ValidarProductoCli.php" method="post">
    <div>
			<label>Producto</label>
			<select name="type" required="required">
				<option value="">Seleccione...</option>
				<option value="Administrador">Administrador</option>
			</select>
		</div>
        <div>
			<label>Cantidad</label>
			<input type="text" name="cantidad" required="required">
		</div>
		<div>
			<button>Realizar Pedido</button>
		</div>
        <div><h2>Lista de Pedidos</h2></div>
        <div>
        <table border =3px>
		<thead>
			<tr>
				<th>Producto</th>
				<th>Precio</th>
			</tr>
		</thead>
        </div>
	</form>
</body>
</html>