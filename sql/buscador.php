<?php 
include('conexion.php');


$conect = new Conexion;

$sql = "SELECT * FROM tareas WHERE title LIKE LOWER('%".$_POST['buscar']."%') OR texto LIKE LOWER('%".$_POST['buscar']."%')";

$stml = $conect->conexionBD()->prepare($sql);
$stml->execute();

$numero = $stml->rowCount();

?>




<!-- Muestra el numero de resultados encontrados -->
<h5 class="card-title">Resultados encontrados (<?php echo $numero; ?>):</h5>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Fecha creación</th>
            <th>Acciones</th>
        </tr>
    </thead>
<tbody>



<?php while($resultado = $stml->fetch()){ ?>

    <tr>
            <td><?php echo $resultado['title'] ?></td>
            <td><?php echo $resultado['texto'] ?></td>
            <td><?php echo $resultado['date_created'] ?></td>
            <td><center>
                <a href="view_edit.php?id=<?php echo $resultado['id']; ?>" class="btn btn-secondary">Editar
                </a>
                <a href="view/delete_task.php?id=<?php echo $resultado['id']; ?>" class="btn btn-danger">Borrar</a>
            </td></center>
        </tr>

<?php } ?>

</tbody>
</table>