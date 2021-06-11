<?php
// INCLUIR ARCHIVOS
include('../sql/conexion.php');
include('sql/conexion.php');



class ConsultaEditar extends Conexion{

    public function consultaBD($id){
        $this->id = $id;


        $conect = new Conexion;
        $sql_edit = "SELECT * FROM tareas WHERE id = :id";


        $stmt_consulta = $conect->conexionBD()->prepare($sql_edit);
        $stmt_consulta->bindParam(':id', $id, PDO::PARAM_INT);


        // EJECUTAR CONSULTA
        $stmt_consulta->execute();
        $stmt_consulta->rowCount() == 1;
        return $stmt_consulta;

    }





    public function actualizarBD($id, $title, $texto){
        $this->id = $id;
        $this->title = $title;
        $this->texto = $texto;


        $conect = new Conexion;
        $sql_update = "UPDATE tareas SET title = :title, texto = :texto WHERE id = :id";


        $stmt_update = $conect->conexionBD()->prepare($sql_update);
        $stmt_update->bindParam(":id", $id, PDO::PARAM_INT);
        $stmt_update->bindParam(":title", $title, PDO::PARAM_STR);
        $stmt_update->bindParam(":texto", $texto, PDO::PARAM_STR);



        // EJECUTAR CONSULTA
        if($stmt_update->execute()){

            $_SESSION['mensaje'] = 'Task actualizada exitosamente.';
            $_SESSION['msj_color'] = 'alert-success';
            header('location: ../index.php');

        } else {

            $_SESSION['mensaje'] = 'Error, intentelo de nuevo.';
            $_SESSION['msj_color'] = 'alert-warning';
            header('location: ../view_edit.php');
        }
    }
}


?>