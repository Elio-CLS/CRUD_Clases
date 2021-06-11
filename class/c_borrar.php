<?php
// INCLUIR ARCHIVOS
include('../sql/conexion.php');

class ConsultaBorrar extends Conexion{

    // CONSULTA BORRAR
    public function deleteBD($id){
        $this->id = $id;


        $conect = new Conexion;
        $sql_delete = "DELETE FROM tareas WHERE id = :id";


        $stmt_delete = $conect->conexionBD()->prepare($sql_delete);
        $stmt_delete->bindParam(':id', $id, PDO::PARAM_INT);

        
        // EJECUTAR CONSULTA
        if($stmt_delete->execute()){
            $_SESSION['mensaje'] = 'Se borro la tarea';
            $_SESSION['msj_color'] = 'alert-danger';
            header('location: ../index.php');
        } else {
            $_SESSION['mensaje'] = 'Error, intentelo de nuevo.';
            $_SESSION['msj_color'] = 'alert-warning';
            header('location: ../index.php');
        }

        return $stmt_delete;

    }
}

?>