function init() {
	
	var formulario = document.getElementsByName('form')[0],
 	 		elementos = formulario.element,
 	 		boton = document.getElementById('btn');

 	 			var validarNombre = function(e){
 	 				if (formulario.user.value == 0) {

 	 					alert("llene el campo nombre");
 	 					e.preventDefault();
 	 				}
 	 			}
 	 			var validarPassword = function(e){
 	 				if (formulario.pass.value == 0) {

 	 					alert("llene el campo Password");
 	 					e.preventDefault();
 	 				}
 	 			}

 	 			var validar = function(e){
 	 				validarNombre(e);
 	 				validarPassword(e);
 	 			}
 	 			formulario.addEventListener("submit", validar);
}
if (window.addEventListener) {
	window.addEventListener("load", init, false);
} else if (window.attachEvent) {
	window.attachEvent("onload", init);
}




