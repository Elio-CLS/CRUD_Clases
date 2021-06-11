<?php 
// INCLUIR ARCHIVOS
include('../sql/conexion.php');

class ConsultaGuardar extends Conexion{

    
    // CONSULTA BORRAR
    public function guardarDB($title, $texto){
        $this->title = $title;
        $this->texto = $texto;


        $conect = new Conexion;
        $sql_reg = "INSERT INTO tareas (title, texto) VALUES (:title,:texto)";


        $stmt_save = $conect->conexionBD()->prepare($sql_reg);
        $stmt_save->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt_save->bindParam(':texto', $texto, PDO::PARAM_STR);

        
        // EJECUTAR CONSULTA
        if($stmt_save->execute()){
            $_SESSION['mensaje'] = 'Tarea guardada exitosamente.';
            $_SESSION['msj_color'] = 'alert-success';
            header('location: ../index.php');
        } else {
            $_SESSION['mensaje'] = 'Error, intentelo de nuevo.';
            $_SESSION['msj_color'] = 'alert-warning';
            header('location: ../index.php');
        }

    }
}

?>