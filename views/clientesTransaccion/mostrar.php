<?php   require('../head.php') ?>

<body style="background: #f5f6fa;">
    <?php   require('../header.php') ?>
    <h1 style="margin: 0 auto; display: block; text-align: center;">Mostrar Transacciones</h1>
    <section class="prueba container-fluid" style="margin-top: 50px; height: 335px;">
        <div class="row col-lg-12">
        <aside class="col-lg-2">
            <?php   require('../aside.php') ?>
        </aside>
            <div class="contenedor col-lg-10">


<table class="table table-striped" id="demo" style="margin-top: 10px;">
<thead>
<tr>
<th>#</th>
<th>Cliente</th>
<th>Ensere</th>
<th>Pago</th>
<th>Fecha</th>
<th>Proceso</th> 
<th><a href="nuevo.php" class="btn btn-primary"title="Nuevo"><i class='glyphicon glyphicon-plus'></i></a></th>
</tr>
</thead>
<tbody>
<?php
$i = 1;
include('../../model.php');  
$md = new Model();
			$cn = $md->getConexion();
			$sqlMostrar = "SELECT cliente_cuota.*, clientes.nombre as cliente, enseres.nombre_ensere as ensere, proceso.nombre_proceso as proceso FROM `cliente_cuota` INNER JOIN clientes ON clientes.idcliente =  cliente_cuota.idcliente INNER JOIN enseres on enseres.id_enseres = cliente_cuota.id_enseres inner join proceso on proceso.id_proceso = cliente_cuota.proceso ";

			$res = mysqli_query($cn,$sqlMostrar);

		while($row = mysqli_fetch_assoc($res)){
            echo "<tr><td>". $i++ . " </td><td> ";
            echo $row['cliente'] . "</td><td>";
            echo $row['ensere'] . "</td><td>";
            echo $row['pago']."</td><td>";
            echo $row['fechaPago']."</td><td>";
            echo $row['proceso']."</td><td>";
            
           // echo "<a href='modificar.php?id=".$row['id_enseres']."' class='btn btn-primary'>Modificar</a>";
            echo "<a href='../../controllerTransaccion.php?op=eliminar&id=".$row['idCuota']."' class='btn btn-danger' mtitle='Eliminar'>
            <i class='glyphicon glyphicon-remove'></i></a>";
            
            echo "</td></tr>\n";

        }

?>
<button class="btn btn-success btn-sm" id="stock-report"><a href="factura.php"> IMPRIMIR
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button></a>
</tbody>
</table>
</div>
</div>
    </section>
    <?php   require('../footer.php') ?>