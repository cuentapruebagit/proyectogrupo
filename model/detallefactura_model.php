<?php
class detallefactura_model{
    private $bd;
    private $idproducto;
    
    function __construct(){
        $this->bd = conexion::getConexion();
        $this->idproducto = array();
    }
    
    function get(){
        $sql = $this->bd->query("select idproducto from detallefactura;");
        $idpro = $this->sql ;
        return $this->idpro;
    }
    
}

?>