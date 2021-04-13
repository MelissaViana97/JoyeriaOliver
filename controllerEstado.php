<?php

	include('model.php');
	extract($_POST);

	if (isset($_GET['op'])) {	


		switch ($_GET['op']) {
		case 'nuevo':
			# code...
			$md = new Model();
			$sqlIngresar = "INSERT INTO `estado`(`EstadoInterno`) VALUES ('".$_POST['nombre']."')";
			$md->ingresar($sqlIngresar);

			header("Location: views/estado/mostrar.php");

			break;

		case 'mostrar':
			header("Location: views/estado/mostrar.php");
		break;
		case 'eliminar':
				$md = new Model();
				$sqlEliminar = "DELETE FROM `estado` WHERE id_Estado = '".$_GET['id']."'";
				$md->eliminar($sqlEliminar);
				header("Location: views/estado/mostrar.php");
		break;
		case 'modificar':
			# code...
			header("Location: views/estado/modificar.php");
		break;
		case 'update':
			# code...
			$md = new Model();
			$sqlModificar = "UPDATE `estado` SET `EstadoInterno`= '".$_POST['nombre']." ' WHERE id_Estado =" .$_GET['id'];
			echo $sqlModificar;
			$md->modificar($sqlModificar);
			header("Location: views/estado/mostrar.php");
		break;
		default:
			# code...
		header("Location: ../joyeria/index.php");	
			
			break;
	}

	}else{
		header("Location: ../joyeria/index.php");

	}

	


 ?>