<?php
class venta_model{
    private $bd;
    private $venta;
    
    function __construct(){
        $this->bd = conexion::getConexion();
        $this->venta = array();
    }
    
    function get(){
        $sql = $this->bd->query("select * from tblventa");
        while($fila = $sql->fetch_assoc()){
            $this->venta[] = $fila;
        }
        return $this->venta;
    }
    
    function insertar($dato){
        $sql = "insert into tblpersonas (nombre) values"."('".$dato['nombre']."')";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
    }
    
    function eliminar($id){
        $sql = "delete from tblpersonas where id= '$id'";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
        
    }
    
    function actualizar($nombre,$id){
        $sql = "update tblpersonas set nombre ='".$nombre['nombre']."' where id=$id";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
    }
    
}

?>