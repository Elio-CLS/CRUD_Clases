<?php 
// INCLUIR ARCHIVOS
include('../class/c_editar.php');



// VERIFICAMOS ID
if(isset($_POST['btn_update_task'])){

    
    if(empty($_GET['id']) && empty($_POST['title_up']) && empty($_POST['texto_up'])){

        $_SESSION['mensaje'] = 'Titulo y Texto vacios.';
        $_SESSION['msj_color'] = "alert-warning";
        header('location: ../view_edit.php');
    } else {
        // ID
        $id = $_GET['id'];


         // TITULO
         if(empty($_POST['title_up'])){
            header('location: ../view_edit.php');
        } else {
            $title = trim($_POST['title_up']);
        }


        // TEXTO
        if(empty($_POST['texto_up'])){
            header('location: ../view_edit.php');
        } else {
            $texto = trim($_POST['texto_up']);
        }


        // ACTUALIZANDO DB
        if(isset($title) && isset($texto)){

            

            // CONSULTA ACTUALIZAR
            $actualizar = new ConsultaEditar;
            $actualizar->actualizarBD($id, $title, $texto);


            
        } else {
            $_SESSION['mensaje'] = 'Completa ambos campos.';
            $_SESSION['msj_color'] = 'alert-warning';
            header('location: ../view_edit.php');
        }
    }
}



?>