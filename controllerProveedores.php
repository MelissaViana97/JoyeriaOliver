<?php

	include('model.php');
	extract($_POST);

	if (isset($_GET['op'])) {	


		switch ($_GET['op']) {
		case 'nuevo':
			# code...
			$md = new Model();
			$sqlIngresar = "INSERT INTO `proveedores`(`nombre_Prov`, `nombre_contacto`, `tel_contacto`, `idsucursal`, `correo`, `pro_dui`) VALUES ('".$_POST['nombreP']."','".$_POST['nombre']."','".$_POST['tel']."','".$_POST['suc']."','".$_POST['correo']."','".$_POST['pro_dui']."')";
			$md->ingresar($sqlIngresar);

			header("Location: views/proveedores/mostrar.php");

			break;

		case 'mostrar':
			header("Location: views/proveedores/mostrar.php");
		break;
		case 'eliminar':
				$md = new Model();
				$sqlEliminar = "DELETE FROM `proveedores` WHERE id_proveedor = '".$_GET['id']."'";
				$md->eliminar($sqlEliminar);
				header("Location: views/proveedores/mostrar.php");
		break;
		case 'modificar':
			# code...
			header("Location: views/proveedores/modificar.php");
		break;
		case 'update':
			# code...
			$md = new Model();
			$sqlModificar = "UPDATE `proveedores` SET `nombre_Prov`= '".$_POST['nombreP']."',`nombre_contacto`='".$_POST['nombre']."',`tel_contacto`='".$_POST['tel']."',`idsucursal`='".$_POST['suc']."' WHERE id_proveedor ='". $_GET['id']."'";
			echo $sqlModificar;
			$md->modificar($sqlModificar);
			header("Location: views/proveedores/mostrar.php");
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