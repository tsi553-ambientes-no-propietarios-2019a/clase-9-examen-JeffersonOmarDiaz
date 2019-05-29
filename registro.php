<?php 
//include('common/utils.php');

if($_GET) {
	if(isset($_GET['error_message'])) {
		$error_message = $_GET['error_message'];
	}else{
     echo 'hola ';   
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Registro</title>
</head>
<body>
	<h1>Registro de usuarios</h1>

<?php if(isset($error_message)) { ?>
	<div><strong><?php echo $error_message; ?></strong></div>
<?php } ?>
	<form action="php/validarRegistro.php" method="post">
		<div>
			<label>Nombre de usuario</label>
			<input type="text" name="username" required="required">
		</div>
        <div>
			<label>Rol</label>
			<select name="type" required="required">
				<option value="">Seleccione...</option>
				<option value="Administrador">Administrador</option>
				<option value="Cliente">Cliente</option>
			</select>
		</div>
		<div>
			<label>Clave</label>
			<input type="password" name="password" required="required">
		</div>
        <div>
			<label>Repita la Clave</label>
			<input type="password" name="passwordR" required="required">
		</div>
		<div>
			<button>Registrarme!</button>
		</div>
	</form>
</body>
</html>