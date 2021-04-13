<?php

	include('model.php');
	extract($_POST);

	if (isset($_GET['op'])) {	


		switch ($_GET['op']) {
		case 'nuevo':
			# code...
			$md = new Model();
			$sqlIngresar = "INSERT INTO `clientes`(`nombre`, `direccion`, `telefono`, `idsucursal`, `dui`, `clicorreo` ) VALUES ('".$_POST['nombre']."','".$_POST['direc']."','".$_POST['tel']."','".$_POST['suc']."','".$_POST['dui']."','".$_POST['clicorreo']."')";
			$md->ingresar($sqlIngresar);

			header("Location: views/clientes/eliminar_modificar.php");

			break;

		case 'mostrar':
			header("Location: views/clientes/meliminar_modificar.php");
		break;
		case 'eliminar':
				$md = new Model();
				$sqlEliminar = "DELETE FROM `clientes` WHERE idcliente = '".$_GET['id']."'";
				$md->eliminar($sqlEliminar);
				header("Location: views/clientes/eliminar_modificar.php");
		break;

		                         //MODIFICAR CLIENTS//

		case 'modificar':
			# code...
			header("Location: views/clientes/meliminar_modificar.php");
		break;
		case 'update':
			# code...
			$md = new Model();
			$sqlModificar = "UPDATE `clientes` SET `nombre`= '".$_POST['nombre']."',`direccion`='".$_POST['direc']."',`telefono`='".$_POST['tel']."',`idsucursal`='".$_POST['suc']."',`dui`='".$_POST['dui']."' WHERE idcliente ='". $_GET['id']."'";
			echo $sqlModificar;
			$md->modificar($sqlModificar);
			header("Location: views/clientes/eliminar_modificar.php");
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