<!DOCTYPE html>
<html lang="ES-SV">
<head>
	<meta charset="UTF-8">
	<title>C&aacute;lculo de Cuota Mensual</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light|Work+Sans" rel="stylesheet">
</head>
<body>
	<div class="contenedor">
		<h2>" Joyeria Oliver "</h2>
	<form id="calculador_cuota">
		<h3>Ingrese el monto del producto a financiar</h3>
 		USD ($) <input type="text" id="monto_producto" placeholder="0.00">
 		<h3>Ingrese el n&uacute;mero de meses (plazo a financiar cr&eacute;dito)</h3>
 		(Meses) <input type="text" id="num_meses" placeholder="0">
 		<input type="button" value="+ Ver Monto Financiado" onclick="Calcular_Cuota();">
 		<input type="button" value="+ Limpiar Formulario" onclick="limpiar_formulario();">
 		<div class="mostrar_financiamiento">
			<p>Estimado usuario(a), a continuaci&oacute;n se le detalla el monto de la cuota
			final que usted deber&aacute; cumplir:</p>
			<p>Monto Calculado: </p><p id="calculo_final">0.00</p>
			<input type="button" value="+ Imprimir" onclick="window.print();">
 		</div>	
		</form> 
	</div>
<script type="text/javascript" src="js/calculo_cuota.js"></script>	
</body>
</html>