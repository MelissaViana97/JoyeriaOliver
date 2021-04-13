<?php 
//iniciar Sesion
  session_start();
  //Comprobacion de autentificacion del usuario
  if ($_SESSION["autenticado"] == "si") {
    # code...

  }
  else{
    header("Location: ../../index.php");
    //salir de este script
  }

 ?>
<header>


	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Joyeria</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <?php 

if ($_SESSION["tipo"]=="admin" ) {
    # code...
  ?>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sucursal<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../sucursal/nuevo.php">Nuevo</a></li>
            <li><a href="../sucursal/mostrar.php">Mostrar Sucursales</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Proveedores<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../proveedores/nuevo.php">Nuevo</a></li>
            <li><a href="../proveedores/mostrar.php">Mostrar Proveedores</a></li>
          </ul>
        </li>
      </ul>



      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleados<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../empleado/nuevo.php">Nuevo</a></li>
            <li><a href="../empleado/mostrar.php">Mostrar Empleados</a></li>
           

          </ul>
        </li>
      </ul>

        <?php 
  }
   ?>

      <?php 

      if ($_SESSION["tipo"]=="admin" || $_SESSION["tipo"]=="gerencia" ) {
    # code...
    ?>


      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Procesos<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../proceso/nuevo.php">Nuevo</a></li>
            <li><a href="../proceso/mostrar.php">Mostrar Procesos</a></li>
          </ul>
        </li>
      </ul>
     
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tipo de Ensere<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../tipoEnsere/nuevo.php">Nuevo</a></li>
            <li><a href="../tipoEnsere/mostrar.php">Mostrar Enseres</a></li>
          </ul>
        </li>
      </ul>

      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Estado<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="../estado/nuevo.php">Nuevo</a></li>
            <li><a href="../estado/mostrar.php">Mostrar Estado</a></li>
          </ul>
        </li>
      </ul>
  <?php 
  }
   ?>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="../../salir.php">Salir</a></li>
        <li class="dropdown">
          
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	</header>