<?php   require('../head.php') ?>

<body style="background: #f5f6fa;">
    <?php   require('../header.php') ?>
    <h1 style="margin: 0 auto; display: block; text-align: center;">Mostrar Enseres</h1>
    <section class="prueba container-fluid" style="margin-top: 50px; height: 335px;">
        <div class="row col-lg-12">
        <aside class="col-lg-2">
            <?php   require('../aside.php') ?>
        </aside>
            <div class="contenedor col-lg-10">


<table class="table table-striped" id="demo" style="margin-top: 10px;">
<thead>
<tr>
<th>Id</th>
<th>Cliente</th>
<th>Nombre</th>
<th>Material</th>
<th>Peso</th>
<th>Valor</th>
<th>Tipo</th>
<th>Estado</th>	
<th>Valor</th>
<th>Tipo</th>
<th>Fecha </th> 
<th><a href="nuevo.php" class="btn btn-primary" title="Nuevo"><i class='glyphicon glyphicon-plus'></i></a></th>
</tr>
</thead>
<tbody>
<?php
include('../../model.php');  
$md = new Model();
			$cn = $md->getConexion();
			$sqlMostrar = "SELECT enseres.*, tipo_ensere.nombre as ensere, estado.EstadoInterno as estado, clientes.nombre as cliente FROM enseres INNER JOIN tipo_ensere ON tipo_ensere.idtipo = enseres.tipoEnsere INNER JOIN estado ON estado.id_Estado = enseres.estado INNER JOIN clientes ON clientes.idcliente = enseres.idcliente ";

			$res = mysqli_query($cn,$sqlMostrar);

		while($row = mysqli_fetch_assoc($res)){
            echo "<tr><td>". $row['id_enseres'] . " </td><td> ";
            echo $row['cliente'] . "</td><td>";
            echo $row['nombre_ensere'] . "</td><td>";
            echo $row['material']."</td><td>";
            echo $row['peso']."kg</td><td>";
            echo "$ ".$row['valor']."</td><td>";
            echo $row['ensere'] . "</td><td>";
            echo $row['estado']."</td><td>";
            echo $row['fechaRegistro']."</td><td>";
            echo $row['cuota'] . "</td><td>";
            echo $row['fechaPago']."</td><td>";
           // echo "<a href='modificar.php?id=".$row['id_enseres']."' class='btn btn-primary'>Modificar</a>";
                        
        }
?>
</tbody>
</table>
</div>
</div>
    </section>
    <?php   require('../footer.php') ?>