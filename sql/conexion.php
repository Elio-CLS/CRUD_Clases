<?php 
session_start();
error_reporting(0);

class Conexion {
   
    public function conexionBD(){

        // DATOS DE CONEXION
        $db_conexion = 'mysql:dbname=db_mis_tareas;host=localhost';
        $us ='root';
        $ps = '';
        
        // PDO conexion
        $obj_conexion = new PDO($db_conexion, $us, $ps);
        
        return $obj_conexion;
    }
}


?>