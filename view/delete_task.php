<?php 
// INCLUIR ARCHIVOS
include('../class/c_borrar.php');

if(isset($_GET['id'])){

    $id = $_GET['id'];


    
    // EJECUTAMOS CONSULTA
    $borrar = new ConsultaBorrar;
    $borrar->deleteBD($id);

    unset($borrar);
}

?>