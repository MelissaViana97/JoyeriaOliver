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


    <form method="POST" action="modificar.php" >

    <div class="form-group">
      <label for="doc"># Documento (ID CLIENTE)</label>
      <input type="text" name="doc" class="form-control" id="doc" placeholder="Ingrese ID de cliente">
    </div>

    <div class="form-group">
        <label for="nombre">Nombre </label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Ingrese Nombre de Cliente">
    </div>

    <div class="form-group">
        <label for="dir">Direccion </label>
        <input type="text" name="dir" class="form-control" id="dir" placeholder="Ingrese Direcci&oacute;n de Cliente">
    </div>

    <div class="form-group">
        <label for="tel">Telefono </label>
        <input type="text" name="tel" class="form-control" id="tel" placeholder="Ingrese Tel&eacute;fono de Cliente">
    </div>

    <div class="form-group">
        <label for="tel"># DUI </label>
        <input type="text" name="dui" class="form-control" id="dui" placeholder="Ingrese # DUI Cliente">
    </div>

    <div class="form-group">
        <label for="tel">Correo Elect&oacute;nico </label>
        <input type="text" name="correo" class="form-control" id="correo" placeholder="Ingrese Correo Electr&oacute;nico de Cliente">
    </div>

    <div class="form-group">
        <label for="tel">Nombre de Sucursal </label>
        <input type="text" name="nsucursal" class="form-control" id="nsucursal" placeholder="Ingrese C&oacute;digo o Nombre Corto de Sucursal">
    </div>
    
    <center>
      <!--input type="submit" value="Registrar" class="btn btn-success" name="btn_registrar">
      <input type="submit" value="Consultar" class="btn btn-primary" name="btn_consultar">
    -->
      <input type="submit" value="Modificar Cliente" class="btn btn-info" name="btn_actualizar">
      <!--input type="submit" value="Eliminar" class="btn btn-danger" name="btn_eliminar"-->
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

      /*MODIFICAR*/

      if(isset($_POST['btn_actualizar']))
      {
        $doc = $_POST['doc']; /*ID CLIENTE*/
        $nombre = $_POST['nombre']; /*NOMBRE CLIENTE*/
        $dir = $_POST['dir']; /*DIRECCION CLIENTE*/
        $tel = $_POST['tel']; /*TELEFONO CLIENTE*/
        $dui = $_POST['dui']; /*DUI CLIENTE*/
        $correo = $_POST['correo']; /*CORREO CLIENTE*/
        $nsucursal = $_POST['nsucursal']; /*SUCURSAL DONDE REALIZO TRANSACCION*/
        /*VALIDACION DE CAMPOS (POR DEFECTOS !!TODOS OBLIGATORIOS!!)*/
        $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE doc = '$doc'");
        if($doc=="" || $nombre=="" || $dir=="" || $tel=="" || $dui=="" || $correo=="" || $nsucursal==""){
          echo "Los campos son obligatorios"."<br>";
        }
        // CONSULTAR
        $existe=0;
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
          if($existe==0){echo "El documento no existe";
        }else{
          //ACTUALIZAR 
          $_UPDATE_SQL="UPDATE $tabla_db1 Set 
          doc='$doc',  /*ID CLIENTE*/
          nombre='$nombre', /*NOMBRE CLIENTE*/
          direccion='$dir', /*DIRECCION CLIENTE*/
          telefono='$tel', /*TELEFONO CLIENTE*/
          dui='$dui', /*DUI CLIENTE*/
          correo='$correo', /*CORREO CLIENTE*/
          sucursal='$nsucursal' /*SUCURSAL DONDE REALIZO TRANSACCION*/
          WHERE doc='$doc'"; 
          mysqli_query($conexion,$_UPDATE_SQL); 
          echo "Actualizacion realizada con exito";
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