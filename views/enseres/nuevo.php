<?php
include('../../model.php');  
$md = new Model();
$cn = $md->getConexion();
$sqlMostrar = "SELECT * FROM clientes " ;
$cn = mysqli_query($cn,$sqlMostrar);
?>
<?php 	require('../head.php') ?>

<body style="background: #f5f6fa;">
	<?php 	require('../header.php') ?>
	<h1 style="margin: 0 auto; display: block; text-align: center;">Ingresar Ensere</h1>
	<section class="prueba container-fluid" style="margin-top: 50px;">
		<div class="row col-lg-12">
			<aside class="col-lg-2">
				<?php 	require('../aside.php') ?>
			</aside>
			<div class="contenedor col-lg-8 col-md-offset-1">

				<form action="../../controllerEnseres.php?op=nuevo" method="POST">
					<div class="form-group col-lg-8 mr-4">
						<label>Nombre del objeto: </label>
						<br>
						<input type="text" name="nombre" class="form-control">
					</div>
					<div class="form-group col-lg-8 mr-4">
						<label>Cliente: </label>
						<br>
						<select name="cliente" class="form-control">
							<option value="0">Nuevo cliente</option>
							<?php while($row = mysqli_fetch_assoc($cn)){ ?>
							<option value='<?php echo $row['idcliente']; ?>'><?php echo $row['nombre'];?></option>
							<?php }
							$cn->close(); 
							?>
						</select>
					</div>
					<div class="form-group col-lg-8 mr-4">
						<label>Material: </label>
						<br>
						<input type="text" name="material" class="form-control">
					</div>
					<div class="form-group col-lg-8 mr-4">
						<label>Peso: </label>
						<br>
						<input type="text" name="peso" class="form-control">
					</div>
					<div class="form-group col-lg-8 mr-4">
						<label>valor: </label>
						<br>
						<input type="text" name="valor" class="form-control">
					</div>
					<?php 
					$md = new Model();
					$cn = $md->getConexion();
					$sqlMostrar = "SELECT * FROM tipo_ensere " ;
					$res = mysqli_query($cn,$sqlMostrar);

					?>
					<div class="form-group col-lg-8 mr-4">
					<select name="ensere" class="form-control">
							<option value="0">Seleccionar Tipo del ensere</option>
							<?php while($row = mysqli_fetch_assoc($res)){ ?>
							<option value='<?php echo $row['idtipo']; ?>'><?php echo $row['nombre']; ?></option>
							<?php }
							$res->close();
							?>
						</select>
					</div>
					<?php 
					$md = new Model();
					$cn = $md->getConexion();
					$sqlMostrar = "SELECT * FROM estado " ;
					$res = mysqli_query($cn,$sqlMostrar);

					?>
					<div class="form-group col-lg-8 mr-4">
					<select name="estado" class="form-control">
							<option value="0">Seleccionar Estado del Ensere</option>
							<?php while($row = mysqli_fetch_assoc($res)){ ?>
							<option value='<?php echo $row['id_Estado']; ?>'><?php echo $row['EstadoInterno']; ?></option>
							<?php }?>
						</select>
					</div>
					<div class="form-group col-lg-8 mr-4">
						<label>Fecha Registro: </label>
						<input name="fecha" class="form-control" type="text" id="fecha" value="<?php echo date("m/d/Y"); ?>" size="10" />
					</div>
					<div class="form-group col-lg-8 mr-4">
						<label>Num Cuota: </label>
						<input type="number" class="form-control" name="cuota">
					</div>

					<div class="form-group col-lg-8 mr-4">
						<label>Fecha de retiro: </label>
						<input name="fechaP" class="form-control" type="date" id="fecha" size="10" />
					</div>
					<br>

					<div class="row col-lg-8 center">
						<div class="col-lg-3"></div>
						<button name="sucursal" class="btn btn-primary">Ingresar Ensere</button>
						<div class="col-lg-1"></div>
						<a href="mostrar.php" class="btn btn-danger">Cancelar</a>
					</div>

				</form>
			</div>
		</div>
	</section>
	<?php 	require('../footer.php') ?>