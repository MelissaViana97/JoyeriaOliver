<?php 
	if (isset($_GET['id'])) {
		# code...
	

	include('../../model.php');  
	$md = new Model();
	$cn = $md->getConexion();
	$sqlMostrar = "SELECT * FROM estado WHERE id_Estado= '".$_GET['id']."'";
	$res = mysqli_query($cn,$sqlMostrar);
	$row = mysqli_fetch_assoc($res);
 ?>

<?php   require('../head.php') ?>

	<body style="background: #f5f6fa;">
		<?php   require('../header.php') ?>
		<h1 style="margin: 0 auto; display: block; text-align: center;">Modificar Estado</h1>
		<section class="prueba container-fluid" style="margin-top: 50px; height: 335px;">
			<div class="row col-lg-12">
				<aside class="col-lg-2">
					<?php   require('../aside.php') ?>
				</aside>
				<div class="contenedor col-lg-8 col-md-offset-1">

<form action="../../controllerEstado.php?op=update&id=<?php echo $_GET['id']?>" method="POST">
	<div>
		<label>Nombre: </label>
		<br>
		<input type="text" name="nombre" value="<?php echo $row['EstadoInterno']; ?>">
	</div>
	<br>
	<div>
		<button name="sucursal" class="btn btn-submit">Modificar</button>
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