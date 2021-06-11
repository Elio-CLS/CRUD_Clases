<?php 
// INCLUIR ARCHIVOS
include('../class/c_guardar.php');



if(isset($_POST['btn_save_task'])){
    if(empty($_POST['title']) && empty($_POST['texto'])){
        $_SESSION['mensaje'] = 'Titulo y Texto vacios.';
        $_SESSION['msj_color'] = "alert-warning";
        header('location: ../index.php');



    } else {
        // TITULO
        if(empty($_POST['title'])){
            header('location: ../index.php');
        } else {
            $title = trim($_POST['title']);
        }



        // TEXTO
        if(empty($_POST['texto'])){
            header('location: ../index.php');
        } else {
            $texto = trim($_POST['texto']);
        }



        // GUARDADO DB
        if(isset($title) && isset($texto)){


            // EJECUTAMOS CONSULTA
            $guardar = new ConsultaGuardar;
            $guardar->guardarDB($title, $texto);

            unset($guardar);
            

            
        } else {
            error_log('Uno de los campos estaba vacio');
            $_SESSION['mensaje'] = 'Completa ambos campos.';
            $_SESSION['msj_color'] = 'alert-warning';
            header('location: ../index.php');
        }
    }
}

?>