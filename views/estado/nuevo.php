<?php 	require('../head.php') ?>
<?php
include('../../model.php');  
$md = new Model();
			$cn = $md->getConexion();
			$sqlMostrar = "SELECT * FROM `clientes`";

			$res = mysqli_query($cn,$sqlMostrar);
?>

<body style="background: #f5f6fa;">
	<?php 	require('../header.php') ?>
	<h1 style="margin: 0 auto; display: block; text-align: center;">Ingresar Estado</h1>
	<section class="prueba container-fluid" style="margin-top: 50px;">
		<div class="row col-lg-12">
		<aside class="col-lg-2">
			<?php 	require('../aside.php') ?>
		</aside>
			<div class="contenedor col-lg-8 col-md-offset-1">

<form action="../../controllerEstado.php?op=nuevo" method="POST">
	<div class="form-group">
		<label>Nombre: </label>
		<br>
		<input class="form-control" type="text" name="nombre">
	</div>
	<br>
	<div class="row col-lg-8 center">
						<div class="col-lg-3"></div>
						<button name="sucursal" class="btn btn-primary">Ingresar Estado</button>
						<div class="col-lg-1"></div>
						<a href="mostrar.php" class="btn btn-danger">Cancelar</a>
					</div>
	
</form>
<br>
<br>
<br>
<br><br>

</div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<br>
	<?php 	require('../footer.php') ?>
</body>