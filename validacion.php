	<?php 
	
	

	include('model.php');  
	$md = new Model();
	$cn = $md->getConexion();
	$sqlMostrar =  "SELECT * FROM empleados where usuario ='".$_POST['user']."' AND pass = '".$_POST['pass']."' ";

	echo $sqlMostrar;
	$res = mysqli_query($cn,$sqlMostrar);
	
	session_start();
	//preparacion de variables de sesion

	
		# code...
	$row = mysqli_fetch_assoc($res);
		# code...
	
		$_SESSION["autenticado"]="si";
		$_SESSION["id"]=$row['id_empleado'];
		$_SESSION["nombre"]=$row['nombre'];
		$_SESSION["usuario"]=$row['usuario'];
		$_SESSION["tipo"]=$row['tipo'];


echo $_SESSION["nombre"]. $_POST['user'];

	if (count($_SESSION)>0 and $_SESSION["usuario"] == $_POST['user'] ) {
		# code...
		header("Location: views/clientes/nuevo.php");
	}
	else{
		header("Location: index.php?error=si");
	}
	

 ?>