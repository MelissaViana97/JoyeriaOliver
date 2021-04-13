<?php   require('../head.php') ?>

<body style="background: #f5f6fa;">
    <?php   require('../header.php') ?>
    <h1 style="margin: 0 auto; display: block; text-align: center;">Mostrar Proveedores</h1>
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
<th>Nombre Proveedor</th>
<th>Nombre</th>
<th>Telefono</th>
<th>Sucursal</th>
<th>Correo</th>
<th>Dui</th>
<th><a href="nuevo.php" class="btn btn-primary" title="Nuevo"><i class='glyphicon glyphicon-plus'></a></th>
</tr>
<?php
include('../../model.php');  
$md = new Model();
			$cn = $md->getConexion();
			$sqlMostrar = "SELECT proveedores.*, sucursal.nombre as sucursal FROM proveedores INNER JOIN sucursal on sucursal.idsucursal = proveedores.idsucursal";

			$res = mysqli_query($cn,$sqlMostrar);

			while($row = mysqli_fetch_assoc($res)){
            echo "<tr><td>". $row['id_proveedor'] . " </td><td> ";
            echo $row['nombre_Prov'] . "</td><td>";
            echo $row['nombre_contacto'] . "</td><td>";
            echo $row['tel_contacto']."</td><td>";
            echo $row['sucursal']."</td><td>"; 
            echo $row['correo']."</td><td>"; 
            echo $row['pro_dui']."</td><td>"; 
                     
             echo "<a href='modificar.php?id=".$row['id_proveedor']."' class='btn btn-warning' title='Modificar' style='margin-right: 10px;'><i class='glyphicon glyphicon-edit'></i></a>";
            echo "<a href='../../controllerProveedores.php?op=eliminar&id=".$row['id_proveedor']."' class='btn btn-danger' title='Eliminar'>
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