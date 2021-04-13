<?php   require('../head.php') ?>

<body style="background: #f5f6fa;">
    <?php   require('../header.php') ?>
    <h1 style="margin: 0 auto; display: block; text-align: center;">Mostrar Empleados</h1>
    <section class="prueba container-fluid" style="margin-top: 50px; height: 335px;">
        <div class="row col-lg-12">
        <aside class="col-lg-2">
            <?php   require('../aside.php') ?>
        </aside>
            <div class="contenedor col-lg-10">


<table class="table table-striped" id="demo" style="margin-top: 10px;">
<thead>
<tr>
<th>id</th>
<th>Nombre</th>
<th>Genero</th>
<th>Direccion</th>
<th>Telefono</th>
<th>Email</th>
<th>Sucursal</th>
<th>Tipo usuario</th>   
<th><a href="nuevo.php" class="btn btn-primary"title="Nuevo"><i class='glyphicon glyphicon-plus'></i></a></th>
</tr>
</thead>
<tbody id="table">
<?php
include('../../model.php');  
$md = new Model();
            $cn = $md->getConexion();
            $sqlMostrar = "SELECT empleados.*, sucursal.nombre as sucursal FROM empleados INNER JOIN sucursal on sucursal.idsucursal = empleados.idsucursal";

            $res = mysqli_query($cn,$sqlMostrar);

            while($row = mysqli_fetch_assoc($res)){
            echo "<tr><td>". $row['id_empleado'] . " </td><td> ";
            echo $row['nombre'] . "</td><td>";
            echo $row['genero'] . "</td><td>";
            echo $row['direccion']."</td><td>";
            echo $row['telefono']."</td><td>";
            echo $row['email']."</td><td>";
            echo $row['sucursal'] . "</td><td>";
            echo $row['tipo']."</td><td>";

            echo "<a href='modificar.php?id=".$row['id_empleado']."' class='btn btn-warning' title='Modificar'><i class='glyphicon glyphicon-edit'></i></a></td><td>";
            
            echo "<a href='../../controller_empleado.php?op=eliminar&id=".$row['id_empleado']."' class='btn btn-danger' title='Eliminar'>
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