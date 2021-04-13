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
	<h1 style="margin: 0 auto; display: block; text-align: center;">Calculadora de Cuotas</h1>
	<section class="prueba container-fluid" style="margin-top: 50px;">
		<div class="row col-lg-12">
		<aside class="col-lg-2">
			<?php 	require('../aside.php') ?>
		</aside>
			<div class="contenedor col-lg-8 col-md-offset-1">
				<div style="width: 100%; min-height: 100%;" class="contenedor_iframe">
					<iframe style="margin-top: -2em; width:100%; min-height: 1030px; border: 0; overflow-x:hidden; overflow-y:hidden;" src="gestion_creditos/calculo_cuota.php"></iframe>
				</div>
			</div>
		</div>
	</section>
	<?php 	require('../footer.php') ?>
</body>