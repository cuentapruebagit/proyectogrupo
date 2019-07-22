<?php
require_once 'model/persona_model.php';

class persona_controller{
    private $model_p;


    function __construct(){
        $this->model_p = new persona_model();
    }

    function index(){
        $query = $this->model_p->get();

        require_once 'view/persona_view.php';

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
        $data['nitproveedor']=$_REQUEST['txtnitproveedor'];
        $data['razonsocial']=$_REQUEST['txtrazonsocial'];
        $data['telefono']=$_REQUEST['txttelefono'];
        $data['direccion']=$_REQUEST['txtdireccion'];
        $data['nombrecontacto']=$_REQUEST['txtnombrecontacto'];
        $data['cargocontacto']=$_REQUEST['txtcargocontacto'];
        $data['celular']=$_REQUEST['txtcelular'];
        $data['pagweb']=$_REQUEST['txtpagweb'];
        $this->model_p->insertar($data);
        $this->index();
    }

    function obtenerPersona(){
        $nitproveedor = $_REQUEST['txtnitproveedor'];   
        $this->model_p->eliminar($nitproveedor);
        $this->index();	


    }

    function actPersona(){

        $data['nitproveedor'] = $_REQUEST['txtnitproveedor'];
        $data['razonsocial'] = $_REQUEST['txtrazonsocial'];
        $data['telefono'] = $_REQUEST['txttelefono'];
        $data['direccion'] = $_REQUEST['txtdireccion'];
        $data['nombrecontacto'] = $_REQUEST['txtnombrecontacto'];
        $data['cargocontacto'] = $_REQUEST['txtcargocontacto'];
        $data['celular'] = $_REQUEST['txtcelular'];
        $data['pagweb'] = $_REQUEST['txtpagweb'];
        
        
        $nitproveedor = $_REQUEST['txtnitproveedor'];
        $this->model_p->actualizar($data,$nitproveedor);
        $this->index();

    }

}

?>