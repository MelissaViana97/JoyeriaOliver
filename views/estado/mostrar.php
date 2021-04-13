<?php   require('../head.php') ?>

<body style="background: #f5f6fa;">
    <?php   require('../header.php') ?>
    <h1 style="margin: 0 auto; display: block; text-align: center;">Mostrar Estados</h1>
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
<th><a href="nuevo.php" class="btn btn-primary" title="Nuevo"><i class='glyphicon glyphicon-plus'></i></a></th>
</tr>
</thead>
<tbody id="table">
<?php
include('../../model.php');  
$md = new Model();
			$cn = $md->getConexion();
			$sqlMostrar = "SELECT * FROM estado";
			$res = mysqli_query($cn,$sqlMostrar);

			while($row = mysqli_fetch_assoc($res)){
            echo "<tr><td>". $row['id_Estado'] . " </td><td> ";
            echo $row['EstadoInterno'] . "</td><td>";
            echo "<a href='modificar.php?id=".$row['id_Estado']."' class='btn btn-warning' title='Modificar' style='margin-right: 10px;'><i class='glyphicon glyphicon-edit'></i></a>";
            echo "<a href='../../controllerEstado.php?op=eliminar&id=".$row['id_Estado']."' class='btn btn-danger' title='Eliminar'>
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