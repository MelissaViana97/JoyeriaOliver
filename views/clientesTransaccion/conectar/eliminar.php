<html>
<head>
  <title>Modificar Campos</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <style type="text/css">
    body{
      padding: 1.2em;
      overflow-x: hidden;
      background: #f5f6fa !important;
    }
  </style>
</head>
<body>

<div class="row">
  <div class="col-md-4"></div>

<!-- INICIA LA COLUMNA -->


  <div class="col-md-4">


    <form method="POST" action="eliminar.php" >

    <div class="form-group">
      <label for="doc"># Documento (ID CLIENTE)</label>
      <input type="text" name="doc" class="form-control" id="doc" placeholder="Ingrese ID Cliente">
    </div>
    
    <center>
      <!--
      <input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
      <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">
      <input type="submit" value="Actualizar" class="btn btn-info" name="btn_actualizar">
    -->
      <input type="submit" value="Eliminar" class="btn btn-danger" name="btn_eliminar">
    </center>

  </form>

  <?php
    include("abrir_conexion.php");
      
      /*VARIABLES DE REGISTRO*/
      $doc    ="";
      $nombre ="";
      $dir    ="";
      $tel    ="";
      $dui    ="";
      $correo    ="";
      $nsucursal    ="";

      /*ELIMINAR*/

      if(isset($_POST['btn_eliminar']))
      {
         $doc = $_POST['doc'];
        $existe=0;
        $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE doc = '$doc'");
        if($doc==""){
          echo "El documento es un campo obligatorio";
        }else{
          while($consulta = mysqli_fetch_array($resultados))
          {
            $existe++;
          }
          if($existe==0){echo "El documento no existe";}
          else{
            //ELIMINAR
            $_DELETE_SQL =  "DELETE FROM $tabla_db1 WHERE doc = '$doc'";
            mysqli_query($conexion,$_DELETE_SQL); 
            echo "Eliminacion realizada con exito.";
          }
        }
      }

    include("cerrar_conexion.php");
  ?>

  </div>


<!-- TERMINA LA COLUMNA -->



  <div class="col-md-4"></div>
</div>



  
  
</body>
</html>