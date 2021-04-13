<?php 	require('../head.php') ?>

<body style="background: #f5f6fa;">
	<?php 	require('../header.php') ?>
	<h1 style="margin: 0 auto; display: block; text-align: center;">Ingresar Sucursal</h1>
	<section class="prueba container-fluid" style="margin-top: 50px;">
		<div class="row col-lg-12">
			<aside class="col-lg-2">
				<?php 	require('../aside.php') ?>
			</aside>
			<div class="contenedor col-lg-8 col-md-offset-1">

				<form action="../../controller.php?op=nuevo" method="POST">
					<div class="form-group col-lg-8">
						<label>Nombre: </label>
						<input class="form-control" type="text" name="nombre" required="" />
					</div>

					<div class="form-group col-lg-8">
						<label>Dirección: </label>
						<textarea class="form-control" name="direc" required="">

						</textarea>
					</div>
					<br>
					<div class="row col-lg-8 center">
						<div class="col-lg-3"></div>
						<button name="sucursal" class="btn btn-primary">Ingresar sucursal</button>
						<div class="col-lg-1"></div>
						<a href="mostrar.php" class="btn btn-danger">Cancelar</a>
					</div>

				</form>

			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<?php 	require('../footer.php') ?>
</body>