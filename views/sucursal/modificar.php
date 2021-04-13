<?php 
if (isset($_GET['id'])) {
		# code...
	

	include('../../model.php');  
	$md = new Model();
	$cn = $md->getConexion();
	$sqlMostrar = "SELECT * FROM `sucursal` where idsucursal = '".$_GET['id']."' ";
	$res = mysqli_query($cn,$sqlMostrar);
	$row = mysqli_fetch_assoc($res);
	?>

	<?php   require('../head.php') ?>

	<body style="background: #f5f6fa;">
		<?php   require('../header.php') ?>
		<h1 style="margin: 0 auto; display: block; text-align: center;">Modificar Sucursal</h1>
		<section class="prueba container-fluid" style="margin-top: 50px; height: 335px;">
			<div class="row col-lg-12">
				<aside class="col-lg-2">
					<?php   require('../aside.php') ?>
				</aside>
				<div class="contenedor col-lg-8 col-md-offset-1">

					<form action="../../controller.php?op=update&id=<?php echo $_GET['id']; ?>" method="POST">
					<div class="form-group">
							<label>Nombre: </label>
							<br>
							<input class="form-control" type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
						</div>
						<div class="form-group">
							<label>Dirección: </label>
							<br>
							<textarea  class="form-control" name="direc">
								<?php echo $row['direccion']; ?>
							</textarea>
						</div>
						<br>
						<div class="row col-lg-8 center">
							<div class="col-lg-3"></div>
							<button name="sucursal" class="btn btn-primary">Modificar sucursal</button>
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