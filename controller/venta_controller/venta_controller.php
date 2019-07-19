<?php
require_once 'model/venta_model/venta_model.php';

class venta_controller{
    private $model_p;


    function __construct(){
        $this->model_p = new venta_model();
    }

    function index(){
        $query = $this->model_p->get();
                    
        require_once 'view/venta_view.php';
                
    }
    function persona(){
        
        require_once 'view/nuevaPersona.php';
        
    }
    function ePersona(){

        require_once 'view/eliminarPersona.php';

    }

    function aPersona(){
        
        require_once 'view/actualizarPersona.php';
        
    }


    function guardar(){
        $data['nombre']=$_REQUEST['txtnombre'];
        $this->model_p->insertar($data);
        $this->index();
    }

    function obtenerPersona(){
        $id = $_REQUEST['txtid'];
        $this->model_p->eliminar($id);
        $this->index();

    }

    function actPersona(){

        $data['nombre'] = $_REQUEST['txtnombre1'];
        $id = $_REQUEST['txtid'];
        $this->model_p->actualizar($data,$id);
        $this->index();

    }

}

?>