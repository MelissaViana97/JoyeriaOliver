<?php 
		if (isset($_GET['id'])) {
		# code...
	

	include('../../model.php');  
	$md = new Model();
	$cn = $md->getConexion();
	$sqlMostrar = "SELECT * FROM `empleados` where id_empleado = '".$_GET['id']."' ";
	$res = mysqli_query($cn,$sqlMostrar);
	$row = mysqli_fetch_assoc($res);

 ?>

<?php   require('../head.php') ?>

	<body style="background: #f5f6fa;">
		<?php   require('../header.php') ?>
		<h1 style="margin: 0 auto; display: block; text-align: center;">Modificar Empleado</h1>
		<section class="prueba container-fluid" style="margin-top: 50px; height: 335px;">
			<div class="row col-lg-12">
				<aside class="col-lg-2">
					<?php   require('../aside.php') ?>
				</aside>
				<div class="contenedor col-lg-8 col-md-offset-1">


					<form action="../../controller_empleado.php?op=update&id=<?php echo $_GET['id']?>" method="POST">
						<div class="form-group col-lg-8 mr-4">
								<label>Nombre: </label>
		
		<input class="form-control" type="text" name="nombre">
	</div>
	<div class="form-group col-lg-8 mr-4">
		<label>Genero: </label>
		
		<select class="form-control" name="genero">
			<option value="M">Masculino</option>
			<option value="F">Femenino</option>
		</select>
	</div>
	<div class="form-group col-lg-8 mr-4">
		<label>Sucursal: </label>
		<br>
		<select name="suc" class="form-control">
			<option value="0">Seleccionar Sucursal</option>
			<?php while($row = mysqli_fetch_assoc($res)){ ?>
					<option value='<?php echo $row['idsucursal']; ?>'><?php echo $row['nombre']; ?></option>
			<?php } ?>
		</select>
	</div>
	<div class="form-group col-lg-8 mr-4">
		<label>Dirección: </label>
		<br>
		<textarea class="form-control"  rows="4" cols="25" name="direc">
			
		</textarea>
	</div>
	<div class="form-group col-lg-8 mr-4">
		<label>telefono: </label>
		<br>
		<input class="form-control" type="text" name="tel">
	</div>
	<div class="form-group col-lg-8 mr-4">
		<label>Email: </label>
		<br>
		<input class="form-control" type="text" name="email">
	</div>
	<br>
						<div class="row col-lg-8 center">
							<div class="col-lg-3"></div>
							<!--Solamente cambie la etiqueta por una a, como los demas buttons, creeria que fallaba porque quiza 
							hay algo ya establecido en el JS. Pero usenlo asi con la A, que ya probe y si funciona -->
							<a href="mostrar.php" class="btn btn-primary">Modificar empleado</a>
							<div class="col-lg-1"></div>
							<a href="mostrar.php" class="btn btn-danger">Cancelar</a>
						</div>

					</form>
				</div>
			</div>
		</section>
		<?php   require('../footer.php') ?>

		<?php 	
	}else 
	header("Location: mostrar.php");

	?>