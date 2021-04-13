<?php   require('../head.php') ?>

<body style="background: #f5f6fa;">
    <?php   require('../header.php') ?>
    <h1 style="margin: 0 auto; display: block; text-align: center;">Mostrar Clientes</h1>
    <section class="prueba container-fluid" style="margin-top: 50px; height: 335px;">
        <div class="row col-lg-12">
        <aside class="col-lg-2">
            <?php   require('../aside.php') ?>
        </aside>
            <div class="contenedor col-lg-10">
<table class="table table-striped" id="demo" style="margin-top: 15px;">
<thead>
<tr>
<th>id</th>
<th>Nombre</th>
<th>Dirección</th>
<th>Telefono</th>
<th>Sucursal</th>
<th>Dui</th>
<th>Correo</th>

<th><a href="nuevo.php" class="btn btn-primary" title="Nuevo"><i class='glyphicon glyphicon-plus'></i></a></th>
</tr>
</thead>
<tbody id="table">
<?php
include('../../model.php');  
$md = new Model();
			$cn = $md->getConexion();
			$sqlMostrar = "SELECT clientes.*, sucursal.nombre as sucursal FROM clientes INNER JOIN sucursal on sucursal.idsucursal = clientes.idsucursal";
			$res = mysqli_query($cn,$sqlMostrar);

			while($row = mysqli_fetch_assoc($res)){
            echo "<tr><td>". $row['idcliente'] . " </td><td> ";
            echo $row['nombre'] . "</td><td>";
            echo $row['direccion'] . "</td><td>";
            echo $row['telefono'] . "</td><td>";
            echo $row['sucursal']."</td><td>"; 
            echo $row['dui']."</td><td>"; 
            echo $row['clicorreo']."</td><td>"; 
            

             echo "<a href='modificar.php?id=".$row['idcliente']."' class='btn btn-warning' title='Modificar' style='margin-right: 10px;'><i class='glyphicon glyphicon-edit'></i></a>";
            echo "<a href='../../controllerCliente.php?op=eliminar&id=".$row['idcliente']."' class='btn btn-danger' title='Eliminar'>
            <i class='glyphicon glyphicon-remove'></i></a>";
            echo "</td></tr>\n";
        }
?>
</tbody>
</table>
</div>
</div>
    </section>
    <?php   require('../footer.php') ?>