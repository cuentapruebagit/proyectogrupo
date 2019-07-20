<?php
class persona_model{
    private $bd;
    private $persona;
    
    function __construct(){
        $this->bd = conexion::getConexion();
        $this->persona = array();
    }
    
    function get(){
        $sql = $this->bd->query("select * from tblpersonas");
        while($fila = $sql->fetch_assoc()){
            $this->persona[] = $fila;
        }
        return $this->persona;
    }
    
    function insertar($dato){
        $sql = "insert into tblproveedores (nitproveedor, razonsocial, telefono, direccion, nombrecontacto,cargocontacto,celular, pagweb) VALUES"."('".$dato['nitproveedor'].", ".$dato['razonsocial'].", ".$dato['telefono'].", ".$dato['direccion'].", ".$dato['nombrecontacto'].", ".$dato['cargocontacto'].", ".$dato['celular'].", ".$dato['pagweb']."')";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
    }
    
    function eliminar($id){
        $sql = "delete from tblpersonas where id= '$id'";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
        
    }
    
    function actualizar($razonsocial, $telefono, $direccion, $nombrecontacto, $cargocontacto, $celular, $pagweb, $nitproveedor){
        
        $nitproveedor = $nitproveedor['nitproveedor'];
        $razonsocial = $razonsocial['razonsocial'];
        $telefono = $telefono['telefono'];
        $direccion = $direccion['direccion'];
        $nombrecontacto = $nombrecontacto['nombrecontacto'];
        $cargocontacto = $cargocontacto['cargocontacto'];
        $celular = $celular['celular'];
        $pagweb = $pagweb['pagweb'];
        
        $sql = "update tblproveedores set razonsocial ='$razonsocial', telefono ='$telefono', direccion='$direccion', nombrecontacto='$nombrecontacto', cargocontacto='$cargocontacto', celular='$celular', pagweb='$pagweb'  where nitproveedor=$$nitproveedor";
        
        mysqli_query($this->bd,$sql) or die("Error de conexion");
    }  
    
}

?>