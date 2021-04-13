<?php

	include('model.php');
	extract($_POST);

	if (isset($_GET['op'])) {	


		switch ($_GET['op']) {
		case 'nuevo':
			# code...
			$md = new Model();
			$sqlIngresar = "INSERT INTO `cliente_cuota`(`idcliente`, `id_enseres`, `pago`, `fechaPago`, `proceso`) VALUES ('".$_POST['cliente']."','".$_POST['ensere']."','".$_POST['pago']."','".$_POST['fecha']."','".$_POST['proceso']."')";
			echo $sqlIngresar;
			echo $sqlIngresar;
			$md->ingresar($sqlIngresar);
			header("Location: views/clientesTransaccion/mostrar.php");
			break;
		case 'mostrar':
			# code...
			header("Location: views/clientesTransaccion/mostrar.php");
		break;
		case 'eliminar':
			# code...
				$md = new Model();
				echo "Eliminar";
				$sqlEliminar = "DELETE FROM `cliente_cuota` WHERE idCuota = '".$_GET['id']."'";
				echo $sqlEliminar;
				$md->eliminar($sqlEliminar);
				header("Location: views/clientesTransaccion/mostrar.php");
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