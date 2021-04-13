<?php

	include('model.php');
	extract($_POST);

	if (isset($_GET['op'])) {	


		switch ($_GET['op']) {
		case 'nuevo':
			# code...
			$md = new Model();
			$sqlIngresar = "INSERT INTO `tipo_ensere`(`nombre`) VALUES ('".$_POST['nombre']."')";
			$md->ingresar($sqlIngresar);

			header("Location: views/tipoEnsere/mostrar.php");

			break;

		case 'mostrar':
			header("Location: views/tipoEnsere/mostrar.php");
		break;
		case 'eliminar':
				$md = new Model();
				$sqlEliminar = "DELETE FROM `tipo_ensere` WHERE idtipo= '".$_GET['id']."'";
				$md->eliminar($sqlEliminar);
				header("Location: views/tipoEnsere/mostrar.php");
		break;
		case 'modificar':
			# code...
			header("Location: views/tipoEnsere/modificar.php");
		break;
		case 'update':
			# code...
			$md = new Model();
			$sqlModificar = "UPDATE `tipo_ensere` SET `nombre`= '".$_POST['nombre']." ' WHERE idtipo =" .$_GET['id'];
			echo $sqlModificar;
			$md->modificar($sqlModificar);
			header("Location: views/tipoEnsere/mostrar.php");
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