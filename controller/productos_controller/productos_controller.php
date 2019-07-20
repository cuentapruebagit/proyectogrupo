<?php
require_once 'model/productos_model/producto_model.php';
require_once 'model/productos_model/proveedor_model.php';

class productos_controller{
    private $model_p;
    private $model_pro;


    function __construct(){
        $this->model_p = new producto_model();
        $this->model_pro= new proveedor_model();
    }

    function index(){
        $query = $this->model_p->get();
                    
        require_once 'view/productos_view/producto_view.php';
                
    }
    function aproducto(){
        $query = $this->model_pro->get();
        require_once 'view/productos_view/nuevoProducto.php';
        
    }
    function eProducto(){

        require_once 'view/eliminarPersona.php';

    }

    function acProducto(){

		
        require_once 'view/actualizarPersona.php';
        
    }


    function guardar(){
        $data['nombre']=$_REQUEST['txtnombre'];
        $data['precio']=$_REQUEST['txtprecio'];
        $data['proveedor']=$_REQUEST['sel_proveedor'];
        $data['descripcion']=$_REQUEST['txtdescrip'];
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