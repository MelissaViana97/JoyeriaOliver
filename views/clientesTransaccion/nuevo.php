<?php
include('../../model.php');  
$md = new Model();
$cn = $md->getConexion();
$sqlMostrar = "SELECT clientes.*, enseres.* FROM clientes inner join enseres on enseres.idcliente = clientes.idcliente" ;
$cn = mysqli_query($cn,$sqlMostrar);
?>
<?php 	require('../head.php') ?>

<body style="background: #f5f6fa;">
	<?php 	require('../header.php') ?>
	<h1 style="margin: 0 auto; display: block; text-align: center;">Nueva Transacción</h1>
	<section class="prueba container-fluid" style="margin-top: 50px;">
		<div class="row col-lg-12">
			<aside class="col-lg-2">
				<?php 	require('../aside.php') ?>
			</aside>
			<div class="contenedor col-lg-8 col-md-offset-1">

				<form action="../../controllerTransaccion.php?op=nuevo" method="POST">
					
					<div class="form-group col-lg-8 mr-4">
						<label>Cliente: </label>
						<br>
						<select name="cliente" class="form-control">
							<option value="0">Seleccionar Cliente</option>
							<?php while($row = mysqli_fetch_assoc($cn)){ ?>
							<option value='<?php echo $row['idcliente']; ?>'><?php echo $row['nombre'];?></option>
							<?php }
							$cn->close(); 
							?>
						</select>
					</div>
					<?php 
					$md = new Model();
					$cn = $md->getConexion();
					$sqlMostrar = "SELECT * FROM enseres" ;
					$res = mysqli_query($cn,$sqlMostrar);

					?>
					<div class="form-group col-lg-8 mr-4">
					<select name="ensere" class="form-control">
							<option value="0">Seleccionar ensere</option>
							<?php while($row = mysqli_fetch_assoc($res)){ ?>
							<option value='<?php echo $row['id_enseres']; ?>'><?php echo $row['nombre_ensere']; ?></option>
							<?php }
							$res->close();
							?>
						</select>
					</div>

					<div class="form-group col-lg-8 mr-4">
						<label>Pago: </label>
						<br>
						<input type="text" name="pago" class="form-control">
					</div>
			
					<div class="form-group col-lg-8 mr-4">
						<label>Fecha Pago: </label>
						<input name="fecha" class="form-control" type="text" id="fecha" value="<?php echo date("m/d/Y"); ?>" size="10" />
					</div>

					<?php 
					$md = new Model();
					$cn = $md->getConexion();
					$sqlMostrar = "SELECT * FROM proceso" ;
					$res = mysqli_query($cn,$sqlMostrar);

					?>
					<div class="form-group col-lg-8 mr-4">
					<select name="proceso" class="form-control">
							<option value="0">Seleccionar Proceso de venta</option>
							<?php while($row = mysqli_fetch_assoc($res)){ ?>
							<option value='<?php echo $row['id_proceso']; ?>'><?php echo $row['nombre_proceso']; ?></option>
							<?php }
							$res->close();
							?>
						</select>
					</div>

					
					<br>

					<div class="row col-lg-8 center">
						<div class="col-lg-3"></div>
						<button name="sucursal" class="btn btn-primary">Ingresar transaccion</button>
						<div class="col-lg-1"></div>
						<a href="nuevo.php" class="btn btn-danger">Cancelar</a>
						
					</div>

				</form>
			</div>
		</div>
	</section>
	<?php 	require('../footer.php') ?>