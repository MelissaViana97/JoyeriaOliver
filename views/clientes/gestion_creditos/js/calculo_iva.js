/*CALCULO IVA Y OTROS IMPUESTOS*/
var calculo_iva = {
	/* RESETEO DE VARIABLES */
	valorReseteado : '0.00',
	valorBase : '0.00',
	valorIVAFINAL : '0.00',
	/* SE INICIALIZA LA FUNCION PARA CALCULO DEL IVA */
	run : function() {
		var valor_cantidad = $('#valor_cantidad').val();
		var iva  = $('#iva').val();
		var incluir_impuesto = $('#incluir_impuesto').is(':checked');
		if (valor_cantidad !== '' && iva !== '') {
			if (incluir_impuesto) {
				var valor_nuevo = valor_cantidad / ((iva / 100) + 1);
				calculo_iva.valorBase = parseFloat(valor_cantidad) - parseFloat(valor_nuevo);
				calculo_iva.valorIVAFINAL = valor_nuevo.toFixed(2);
			} else {
				calculo_iva.valorBase = (valor_cantidad * iva) / 100;
				calculo_iva.valorIVAFINAL = parseFloat(valor_cantidad) + parseFloat(calculo_iva.valorBase);
			}
			$('#calculo_cantidad_nuevo').val(parseFloat(calculo_iva.valorBase).toFixed(2));
			$('#total_final').val(parseFloat(calculo_iva.valorIVAFINAL).toFixed(2));
		} else {
			$('#calculo_cantidad_nuevo').val(calculo_iva.valorReseteado);
			$('#total_final').val(calculo_iva.valorReseteado);
		}
	}
};
/* SE VALIDA Y SE RETORNA CALCULO PARA IMPRIMIR EN PANTALLA */
$(function() {

	$('#valor_cantidad').keyup(function() {
		calculo_iva.run();
	});
	
	$('#incluir_impuesto').click(function() {
		calculo_iva.run();
	});
	
	$('#iva').change(function() {
		calculo_iva.run();
	});

});