<?php
require_once 'model/venta_model/venta_model.php';

class venta_controller{
    private $model_v;


    function __construct(){
        $this->model_v = new venta_model();
    }

    function index(){
        $query = $this->model_v->get();
                    
        require_once 'view/view_venta/venta_view.php';
                
    }
    function persona(){
        
        require_once 'view/view_venta/nuevaVenta.php';
        
    }
    function ePersona(){

        require_once 'view/view_venta/eliminarVenta.php';

    }

    function aPersona(){
        
        require_once 'view/view_venta/actualizarVenta.php';
        
    }


    function guardar(){
        $data['fecha']=$_REQUEST['txtfecha'];
        $data['cedula']=$_REQUEST['txtcedula'];
        $data['totalfactura']=$_REQUEST['txtfactura'];
        
        $this->model_v->insertar($data);
        $this->index();
    }
    

    function obtenerVenta(){
        $id = $_REQUEST['txtid'];
        $this->model_v->eliminar($id);
        $this->index();

    }

    function actVenta(){

        $data['fecha'] = $_REQUEST['txtfecha1'];
        $data['cedula'] = $_REQUEST['txtcedula1'];
        $data['totalfactura'] = $_REQUEST['txtfactura1'];
        $id = $_REQUEST['txtid'];
        $this->model_v->actualizar($data,$id);
        $this->index();

    }

}

?>