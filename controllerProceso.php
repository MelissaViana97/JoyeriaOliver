<?php

	include('model.php');
	extract($_POST);

	if (isset($_GET['op'])) {	


		switch ($_GET['op']) {
		case 'nuevo':
			# code...
			$md = new Model();
			$sqlIngresar = "INSERT INTO `proceso`(`nombre_proceso`) VALUES ('".$_POST['nombre']."')";
			$md->ingresar($sqlIngresar);

			header("Location: views/proceso/mostrar.php");

			break;

		case 'mostrar':
			header("Location: views/proceso/mostrar.php");
		break;
		case 'eliminar':
				$md = new Model();
				$sqlEliminar = "DELETE FROM `proceso` WHERE id_proceso = '".$_GET['id']."'";
				$md->eliminar($sqlEliminar);
				header("Location: views/proceso/mostrar.php");
		break;
		case 'update':
			# code...
			$md = new Model();
			$sqlModificar = "UPDATE `proceso` SET nombre_proceso = '".$_POST['nombre']." ' WHERE id_proceso =" .$_GET['id'];
			echo $sqlModificar;
			$md->modificar($sqlModificar);
			header("Location: views/proceso/mostrar.php");
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