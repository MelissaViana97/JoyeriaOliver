<?php

	include('model.php');
	extract($_POST);

	if (isset($_GET['op'])) {	


		switch ($_GET['op']) {
		case 'nuevo':
			# code...
			$md = new Model();
			$sqlIngresar = "INSERT INTO `empleados`(`nombre`, `genero`, `direccion`,`telefono`,`email`, `idsucursal`, `usuario`, `pass`, `tipo`) VALUES ('".$_POST['nombre']."','".$_POST['genero']."','".$_POST['direc']."','".$_POST['tel']."','".$_POST['email']."','".$_POST['suc']."','".$_POST['usuario']."','".$_POST['pass']."','".$_POST['tipo']."')";
			echo $sqlIngresar;
			$md->ingresar($sqlIngresar);
			header("Location: views/empleado/mostrar.php");
			break;
		case 'mostrar':
			# code...
			header("Location: views/empleado/mostrar.php");
		break;
		case 'eliminar':
			# code...
				$md = new Model();
				$sqlEliminar = "DELETE FROM `empleados` WHERE id_empleado = '".$_GET['id']."'";
				echo $sqlEliminar;
				$md->eliminar($sqlEliminar);
				header("Location: views/empleado/mostrar.php");
		break;
		case 'modificar':
			# code...
			header("Location: views/sucursal/modificar.php");
		break;
		case 'update':
			# code...
			$md = new Model();
			$sqlModificar = "UPDATE `sucursal` SET `nombre`= '".$_POST['nombre']."',`direccion`='".$_POST['direc']." ' WHERE idsucursal =" .$_GET['id'];
			echo $sqlModificar;
			$md->modificar($sqlModificar);
			header("Location: views/sucursal/mostrar.php");
		break;
		default:
			# code...
			
			echo $_GET['op'];
			break;
	}

	}else{
		header("Location: ../joyeria/index.php");

	}

	


 ?>