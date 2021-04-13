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
	<h1 style="margin: 0 auto; display: block; text-align: center;">Ingresar Cliente</h1>
	<section class="prueba container-fluid" style="margin-top: 50px;">
		<div class="row col-lg-12">
		<aside class="col-lg-2">
			<?php 	require('../aside.php') ?>
		</aside>
			<div class="contenedor col-lg-8 col-md-offset-1">
				<form action="../../controllerCliente.php?op=nuevo" method="POST">
					<div class="form-group col-lg-8 mr-4">
						<label>Nombre: </label>
						<br>
						<input type="text" name="nombre" class="form-control" required="" pattern="/{a-z A-Z}/">
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

					<div class="form-group col-lg-8" >
						<label>Dirección: </label>
						<br>
						<textarea  rows="5" id="comment" name="direc" class="form-control" required="">

						</textarea>
					</div>

					<div class="form-group col-lg-8 mr-4">
						<label>Correo: </label>
						<br>
						<input class="form-control" type="text" name="clicorreo">
					</div>


					<div class="form-group col-lg-8">
						<label>Sucursal: </label>
						<br>
						<select name="suc" class="form-control" required="">
							<option value="0">Seleccionar Sucursal</option>
							<?php while($row = mysqli_fetch_assoc($res)){ ?>
							<option value='<?php echo $row['idsucursal']; ?>'><?php echo $row['nombre']; ?></option>
							<?php } ?>
						</select>
					</div>

					<div class="row col-lg-8 center">
						<div class="col-lg-3"></div>
						<button name="sucursal" class="btn btn-primary">Ingresar cliente</button>
						<div class="col-lg-1"></div>
						<a href="nuevo.php" class="btn btn-danger">Cancelar</a>
					</div>

				</form>
			</div>
		</div>
	</section>
	<?php 	require('../footer.php') ?>
</body>