<?php 
if (isset($_GET['id'])) {
		# code...
	

	include('../../model.php');  
	$md = new Model();
	$cn = $md->getConexion();
	$sqlMostrar = "SELECT proveedores.*, sucursal.nombre as sucursal FROM proveedores INNER JOIN sucursal on sucursal.idsucursal = proveedores.idsucursal WHERE id_proveedor= '".$_GET['id']."'";
	$res = mysqli_query($cn,$sqlMostrar);
	$row = mysqli_fetch_assoc($res);
	?>

	<?php 	require('../head.php') ?>

	<body style="background: #f5f6fa;">
		<?php 	require('../header.php') ?>
		<h1 style="margin: 0 auto; display: block; text-align: center;">Ingresar Proveedor</h1>
		<section class="prueba container-fluid" style="margin-top: 50px;">
			<div class="row col-lg-12">
				<aside class="col-lg-2">
					<?php 	require('../aside.php') ?>
				</aside>
				<div class="contenedor col-lg-8 col-md-offset-1">


					<form action="../../controllerProveedores.php?op=update&id=<?php echo $_GET['id']?>" method="POST">
						<div class="form-group">
							<label>Nombre Proveedor: </label>
							<br>
							<input class="form-control" type="text" name="nombreP" value="<?php echo $row['nombre_Prov'];?>">
						</div>
						<div class="form-group">
							<label>Nombre Contacto: </label>
							<br>
							<input class="form-control" type="text" name="nombre" value="<?php echo $row['nombre_contacto'];?>">
						</div>
						<div class="form-group">
							<label>telefono: </label>
							<br>
							<input class="form-control" type="text" name="tel" value="<?php echo $row['tel_contacto'];?>">
						</div>

                         	<div class="form-group">
						<label>Sucursal: </label>
						<br>
						<select name="suc" class="form-control" required="">
							<option value="0">Seleccionar Sucursal</option>
							<?php while($row = mysqli_fetch_assoc($res)){ ?>
							<option value='<?php echo $row['idsucursal']; ?>'><?php echo $row['nombre']; ?></option>
							<?php } ?>
						</select>
					</div>
					
						<br>
						<div class="row col-lg-8 center">
							<div class="col-lg-3"></div>
							<button name="ip_proveedor" class="btn btn-primary">Modificar </button>
							<div class="col-lg-1"></div>
							<a href="mostrar.php" class="btn btn-danger">Cancelar</a>
						</div>


					</form>
					<br>
					<br>
					<br>
					
				</div>
			</div>
		</section>
		<?php   require('../footer.php') ?>

		<?php 	
	}else 
	header("Location: mostrar.php");

	?>