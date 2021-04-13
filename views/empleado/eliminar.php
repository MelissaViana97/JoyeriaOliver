<?php 
	if (isset($_GET['id'])) {
		# code...
	

	include('../../model.php');  
	$md = new Model();
	$cn = $md->getConexion();
	$sqlMostrar = "SELECT * FROM `empleados` where id_empleado = '".$_GET['id']."' ";
	$res = mysqli_query($cn,$sqlMostrar);
	$row = mysqli_fetch_assoc($res);
 ?>

<form action="../../controller_empleado.php?op=nuevo" method="POST">
	<div>
		<label>Nombre: </label>
		<br>
		<input type="text" name="nombre">
	</div>
	<div>
		<label>Genero: </label>
		<br>
		<select name="genero">
			<option value="M">Masculino</option>
			<option value="F">Femenino</option>
		</select>
	</div>
	<div>
		<label>Dirección: </label>
		<br>
		<textarea  rows="4" cols="25" name="direc">
			
		</textarea>
	</div>
	<div>
		<label>Usuario: </label>
		<br>
		<input type="text" name="user">
	</div>
	<div>
		<label>Contraseña: </label>
		<br>
		<input type="password" name="pass">
	</div>
	<select name="tipo">
			<option value="admin">Administrador</option>
			<option value="comun">Empleado</option>
			<option value="gerencia">Gerencia</option>
		</select>
	<br>
	<div>
		<button name="sucursal" class="btn btn-submit">Ingresar</button>
	</div>
	
</form>

<?php 	
}else 
		header("Location: mostrar.php");

 ?>