<?php
include('../../model.php');  
$md = new Model();
$cn = $md->getConexion();
$sqlMostrar = "SELECT * FROM `sucursal`";

$res = mysqli_query($cn,$sqlMostrar);
?>

<?php 	require('../head.php') ?>

<body style="background: #f5f6fa;">
	<?php 	require('../header.php') ?>
	<h1 style="margin: 0 auto; display: block; text-align: center;">Ingresar Proveedores</h1>
	<section class="prueba container-fluid" style="margin-top: 50px;">
		<div class="row col-lg-12">
			<aside class="col-lg-2">
				<?php 	require('../aside.php') ?>
			</aside>
			<div class="contenedor col-lg-8 col-md-offset-1">

				<form action="../../controllerProveedores.php?op=nuevo" method="POST">
				<div class="form-group">
						<label>Nombre Proveedor: </label>
						<br>
						<input class="form-control" type="text" name="nombreP">
					</div>
					<div class="form-group">
						<label>Nombre Contacto: </label>
						<br>
						<input class="form-control" type="text" name="nombre">
					</div>
					<div class="form-group">
						<label>telefono: </label>
						<br>
						<input class="form-control" type="text" name="tel">
					</div>

					<div class="form-group">
						<label>Sucursal: </label>
						
						<select name="suc" class="form-control">
							<option value="0">Seleccionar Sucursal</option>
							<?php while($row = mysqli_fetch_assoc($res)){ ?>
							<option value='<?php echo $row['idsucursal']; ?>'><?php echo $row['nombre']; ?></option>
							<?php } ?>
						</select>
					</div>

					<div class="form-group">
						<label>Correo: </label>
						<br>
						<input class="form-control" type="text" name="correo">
					</div>
					
					<div class="form-group">
						<label>Dui: </label>
						<br>
						<input class="form-control" type="text" name="pro_dui">
					</div>


					<br>
					<div class="row col-lg-8 center">
						<div class="col-lg-3"></div>
						<button name="sucursal" class="btn btn-primary">Ingresar proveedor</button>
						<div class="col-lg-1"></div>
						<a href="mostrar.php" class="btn btn-danger">Cancelar</a>
					</div>

				</form>

			</div>
		</div>
	</section>
	<?php 	require('../footer.php') ?>
</body>