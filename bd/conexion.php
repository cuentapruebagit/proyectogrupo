<?php
class conexion{
    public function getConexion(){
        $con = new mysqli("localhost","root","111","mvc");
        $con->query("SET NAMES 'utf8'");
        return $con;
    }
    
    
}

?>