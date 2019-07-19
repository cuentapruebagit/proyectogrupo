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
        $sql = "insert into tblventa (fecha,cedula,totalfactura) values"."('".$dato['fecha']."',".$dato['cedula'].",".$dato['totalfactura'].")";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
    }
    
    function eliminar($id){
        $sql = "delete from tblventa where idfactura= '$id'";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
        
    }
    
    function actualizar($data,$id){
        $sql = "update tblventa set fecha ='".$data['fecha']."',cedula=".$data['cedula'].",totalfactura=".$data['totalfactura']." where idfactura=$id";
        mysqli_query($this->bd,$sql) or die("Error de conexion");
    }
    
}

?>