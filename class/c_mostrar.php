<?php 
// INCLUIR ARCHIVOS
include('sql/conexion.php');

class ConsultaMostrar extends Conexion{

    // CONSULTA MOSTRAR
    public function mostrarBD(){

        // Conexion DB
        $conect = new Conexion;

        // SQL
        $sql_view = "SELECT * FROM tareas";

        // Preparar
        $stmt_view = $conect->conexionBD()->prepare($sql_view);

        // Ejecutar
        $stmt_view->execute();
        $stmt_view->rowCount();
        return $stmt_view;

    }
}

?>