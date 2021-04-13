<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Login</title>
 	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
 	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
 	<link rel="stylesheet" href="css/estilos_login.css">
 </head>
 <body>
 	<div class="wrapper">

 		<form name="form" class="login" action="validacion.php?op=vali" method="POST">

 			<p class="title">Personal Autorizado</p>
 			<input type="text" name="user" id="user" placeholder="Usuario" />
 			<i class="fa fa-user"></i>
 			<input type="password" name="pass" id="pass" placeholder="Contraseña" />
 			<i class="fa fa-key"></i>
 			<input type="submit" value="Ingresar" class="state" id="btn" name="btn">
 		</form>
 		<br>
 		
 		<?php 
 			if (isset($_GET['error'])) {
 				# code...
 				if ($_GET['error']=="si") {
 					# code...
 				
 			}

 		 ?>
 		 <br>
 		 <span style="color: red; font-weight: bolder;">
 		 	Usuario o Contraseña incorrectos
 		 </span>
 		 <?php 
 		}
 		  ?>
 		  		<?php 
 			if (isset($_GET['salir'])) {
 				# code...
 				if ($_GET['salir']=="si") {
 					# code...
 				
 			}

 		 ?>
 		 <br>
 		 <span style="color: white; font-weight: bolder;">
 		 	Gracias por su visita
 		 </span>
 		 <?php 
 		}
 		  ?>
 		<footer>Joyeria Oliver- UDB 2018 </footer>
 </div>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
 <script src="js/validacion.js"></script>
</body>
</html>