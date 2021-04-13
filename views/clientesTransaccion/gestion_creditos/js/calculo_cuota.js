/*CALCULO DE CUOTA MENSUAL*/
function Calcular_Cuota() {
 	var monto_producto_financiado = document.getElementById('monto_producto').value;
 	var monto_meses_financiado = document.getElementById('num_meses').value;
 	var calculo_final = (monto_producto_financiado/monto_meses_financiado);
 	document.getElementById('calculo_final').innerHTML =  calculo_final.toFixed(2);
 }

 /*LIMPIAR FORMULARIO DE OPERACIONES*/

 function limpiar_formulario() {
 	document.getElementById("calculador_cuota").reset();
 }