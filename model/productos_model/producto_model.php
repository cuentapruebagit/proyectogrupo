<?php
class producto_model{
    private $bd;
    private $producto;
    
    function __construct(){
        $this->bd = conexion::getConexion();
        $this->producto = array();
    }
    
    function get(){
        $sql = $this->bd->query("select * from tblproductos");
        while($fila = $sql->fetch_assoc()){
            $this->producto[] = $fila;
        }
        return $this->producto;
    }
    
    function insertar($dato){
        $sql = "insert into tblproductos (nombre,precio,descripcion,nitproveedor) values"."('".$dato['nombre']."','".$dato['precio']."','".$dato['descripcion']."','".$dato['proveedor']."')";
        
        mysqli_query($this->bd,$sql) or die("Error..."." ".mysqli_error($this->bd));

    }
    
    function eliminar($id){
        $sql = "delete from tblpersonas where id= '$id'";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
        
    }
    
    function actualizar($datos){
        $sql = "update tblproductos set nombre ='".$datos['nombre']."',precio='".$datos['precio']."', descripcion='".$datos['descripcion']."', nitproveedor='".$datos['proveedor']."' where idproducto='".$datos['id']."'";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
    }
    
}

?>