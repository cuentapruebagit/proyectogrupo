<?php
class proveedor_model{
    private $bd;
    private $proveedor;
    
    function __construct(){
        $this->bd = conexion::getConexion();
        $this->proveedor = array();
    }
    
    function get(){
        $sql = $this->bd->query("select * from tblproveedores");
        while($fila = $sql->fetch_assoc()){
            $this->proveedor[] = $fila;
        }
        return $this->proveedor;
    }
}
?>