<?php

	include('model.php');
	extract($_POST);

	if (isset($_GET['op'])) {	


		switch ($_GET['op']) {
		case 'nuevo':
			# code...
			$md = new Model();
			$sqlIngresar = "INSERT INTO `enseres`(`idcliente`, `nombre_ensere`, `material`, `peso`, `valor`, `tipoEnsere`, `estado`, `fechaRegistro`, `cuota`, `fechaPago`) VALUES ('".$_POST['cliente']."','".$_POST['nombre']."','".$_POST['material']."','".$_POST['peso']."','".$_POST['valor']."','".$_POST['ensere']."','".$_POST['estado']."','".$_POST['fecha']."','".$_POST['cuota']."','".$_POST['fechaP']."')";
			echo $sqlIngresar;
			$md->ingresar($sqlIngresar);
			header("Location: views/enseres/eliminar.php");
			break;
		case 'mostrar':
			# code...
			header("Location: views/enseres/eliminar.php");
		break;
		case 'eliminar':
			# code...
				$md = new Model();
				echo "Eliminar";
				$sqlEliminar = "DELETE FROM `enseres` WHERE id_enseres = '".$_GET['id']."'";
				echo $sqlEliminar;
				$md->eliminar($sqlEliminar);
				header("Location: views/enseres/eliminar.php");
		break;


		case 'modificar':
			# code...
			header("Location: views/enseres/eliminar.php");
		break;
		case 'update':
			# code...
			$md = new Model();
			$sqlModificar = "UPDATE `sucursal` SET `nombre`= '".$_POST['nombre']."',`cliente`='".$_POST['idcliente']."',`nombre`='".$_POST['nombre_ensere']."',`material`='".$_POST['material']."',`peso`='".$_POST['peso']."',`valor`='".$_POST['valor']."',`tipoEnsere`='".$_POST['enseres']."',`estado`='".$_POST['estado']."',`fecha`='".$_POST['fechaRegistro']."',`cuota`='".$_POST['cuota']."',`fechaP`='".$_POST['fechaPago']."' WHERE idsucursal =" .$_GET['id'];
			echo $sqlModificar;
			$md->modificar($sqlModificar);
			header("Location: views/sucursal/eliminar.php");
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