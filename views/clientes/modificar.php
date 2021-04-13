<?php 
if (isset($_GET['id'])) {
		# code...
	include('../../model.php');  
	$md = new Model();
	$cn = $md->getConexion();
	$sqlMostrar = "SELECT clientes.*, sucursal.nombre as sucursal FROM clientes INNER JOIN sucursal on sucursal.idsucursal = clientes.idsucursal WHERE idcliente= '".$_GET['id']."'";
	$res = mysqli_query($cn,$sqlMostrar);
	$row = mysqli_fetch_assoc($res);
	?>


	<?php   require('../head.php') ?>

	<body style="background: #f5f6fa;">
		<?php   require('../header.php') ?>
		<h1 style="margin: 0 auto; display: block; text-align: center;">Modificar Cliente</h1>
		<section class="prueba container-fluid" style="margin-top: 50px; height: 335px;">
			<div class="row col-lg-12">
				<aside class="col-lg-2">
					<?php   require('../aside.php') ?>
				</aside>
				<div class="contenedor col-lg-8 col-md-offset-1">


					<form action="../../controllerCliente.php?op=update&id=<?php echo $_GET['id']?>" method="POST">
						<div class="form-group col-lg-8 mr-4">
							<label>Nombre: </label>
							<br>
							<input type="text" name="nombre" value="<?php echo $row['nombre']; ?>" class="form-control">
						</div>
						<div class="form-group col-lg-8 mr-4">
							<label>Dirección: </label>
							<br>
							<textarea rows="5" id="comment" name="direc" class="form-control" required="">
								<?php echo $row['direccion']; ?>
							</textarea>
						</div>

						<div class="form-group col-lg-8 mr-4">
						<label>telefono: </label>
						<br>
						<input class="form-control" type="text" name="tel">
					</div>

						<div class="form-group col-lg-8 mr-4">
						<label>Dui: </label>
						<br>
						<input class="form-control" type="text" name="dui">
					</div>


					<div class="form-group col-lg-8 mr-4">
						<label>Sucursal: </label>
						<select name="suc" class="form-control">
							<option value="0">Seleccionar Sucursal</option>
							<?php while($row = mysqli_fetch_assoc($res)){ ?>
							<option value='<?php echo $row['idsucursal']; ?>'><?php echo $row['nombre']; ?></option>
							<?php } ?>
						</select>
					</div>

						<br>
						<div class="row col-lg-8 center">
							<div class="col-lg-3"></div>
							<button name="idcliente" class="btn btn-primary">Modificar cliente</button>
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