<?php
class conexion{
    public function getConexion(){
        $con = new mysqli("localhost","root","youknow123","mvc");
        $con->query("SET NAMES 'utf8'");
        return $con;
    }
    
    
}

?>