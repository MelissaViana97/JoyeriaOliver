<!DOCTYPE html>
<html lang="ES-SV">
<head>
	<meta charset="UTF-8">
	<title>C&aacute;lculo de Impuestos</title>
	<link rel="stylesheet" type="text/css" href="css/calculadora.css">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light|Work+Sans" rel="stylesheet">
</head>
<body>
	<div class="contenedor">
		<h2>" Joyeria Oliver "</h2>
		<form id="calculador_iva" method="post">	
			<h3>Nombre del cliente:</h3>
			<input type="text" name="valor_cantidad" id="valor_cantidad" value="" class="field" placeholder="Nombre" />
			<h3>ID de cliente:</h3>
			<input type="text" name="valor_cantidad" id="valor_cantidad" value="" class="field" placeholder="ID" />
			<h3>Nombre del producto </h3>
			<input type="text" name="valor_cantidad" id="valor_cantidad" value="" class="field" placeholder="Producto" />
										
			<!-- se pueden agregar otros impuestos -->
			<h3>Pago </h3>
			<input type="text" name="valor_cantidad" id="valor_cantidad" value="" class="field" placeholder="0.00" />
			<h3>Fecha </h3>
			<input type="text" name="valor_cantidad" id="valor_cantidad" value="" class="field" placeholder="07/07/19" />
			
			<input type="button" value="+ Imprimir" onclick="window.print();">
</form>
</div>
<script type="text/javascript" src="js/jquery-1.6.4.min.js"></script>
<script type="text/javascript" src="js/calculo_iva.js"></script>
</body>
</html>