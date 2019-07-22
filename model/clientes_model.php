<?php
class clientes_model{
    private $bd;
    private $clientes;
    
    function __construct(){
        $this->bd = conexion::getConexion();
        $this->clientes = array();
    }
    
    function get_clientes(){
        $sql = $this->bd->query("select * from tblclientes;");
        while($fila = $sql -> fetch_assoc()){
            $this->clientes[] = $fila;
        }
        return $this->clientes;
    }
}

?>