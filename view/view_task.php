<?php 
// INCLUIR ARCHIVOS
error_reporting(0);
include('class/c_mostrar.php');


// EJECUTAMOS CONSULTA
$mostrar = new ConsultaMostrar;
$view = $mostrar->mostrarBD();

    while($row = $view->fetch()){ ?>
        <tr>
            <td><?php echo $row['title'] ?></td>
            <td><?php echo $row['texto'] ?></td>
            <td><?php echo $row['date_created'] ?></td>
            <td><center>
                <a href="view_edit.php?id=<?php echo $row['id']; ?>" class="btn btn-secondary">Editar
                </a>
                <a href="view/delete_task.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Borrar</a>
            </td></center>
        </tr>


<?php }

unset($view);

?>