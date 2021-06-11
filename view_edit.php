<?php 
// INCLUIR ARCHIVOS
error_reporting(0);
include('class/c_editar.php');



// VERIFICAMOS ID
if(isset($_GET['id'])){

    $id = $_GET['id'];



    // EJECUTAMOS CONSULTA
    $mostrar = new ConsultaEditar;
    $db_mostrar = $mostrar->consultaBD($id);
    $row = $db_mostrar->fetch();



    $title_db = trim($row['title']);
    $texto_db = trim($row['texto']);
            
    
}



// HEADER
include('includes/header.php');



// NAV
include('includes/nav.php');



error_log('EDIT VIEW');
?>



<!-- TABLA DE LA TAREA A EDITAR -->
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="view/update_task.php?id=<?php echo $_GET['id'] ?>" method="POST">
                    <!-- TITULO -->
                    <div class="form-group">
                        <input type="text" name="title_up" value="<?php echo $title_db; ?>" class="form-control" placeholder="Editar Titulo">
                    </div>
                    <br>
                    <!-- TEXTO -->
                    <div class="form-group">
                        <textarea name="texto_up" rows="4" class="form-control" placeholder="Edita el Texto" placeholder="Editar Texto"><?php echo $texto_db; ?></textarea>
                    </div>
                    <br>
                    <!-- BOTON -->
                    <input type="submit" class="btn btn-success btn-block" name="btn_update_task" value="Actualizar Tarea">
                </form>
            </div>
            <!-- SESSION MENSAJES -->
            <?php session_start(); ?>
            <?php if(isset($_SESSION['mensaje'])){ ?>
                <div class="alert <?php echo $_SESSION['msj_color'];?> alert-dismissible fade show" role="alert">

                    <?php echo $_SESSION['mensaje']; ?>

                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    
                </div>
            <?php session_unset(); } ?>
        </div>
    </div>
</div>



<?php
//FOOTER
include('includes/footer.php');
?>