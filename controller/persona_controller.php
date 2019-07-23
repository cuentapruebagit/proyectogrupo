<?php
require_once 'model/persona_model.php';

class persona_controller{
    private $model_p;


    function __construct(){
        $this->model_p = new persona_model();
    }

    function index(){
        $query = $this->model_p->get();
<<<<<<< HEAD
                    
        require_once 'view/persona_view.php';
                
    }
    function persona(){
        
        require_once 'view/nuevaPersona.php';
        
=======

        require_once 'view/persona_view.php';

    }
    function persona(){

        require_once 'view/nuevaPersona.php';

>>>>>>> 6e084ecbf733f08413c5404454bdd5ac33499439
    }
    function ePersona(){

        require_once 'view/eliminarPersona.php';

    }

    function aPersona(){
<<<<<<< HEAD
        
        require_once 'view/actualizarPersona.php';
        
=======


        require_once 'view/actualizarPersona.php';

>>>>>>> 6e084ecbf733f08413c5404454bdd5ac33499439
    }


    function guardar(){
<<<<<<< HEAD
        $data['nombre']=$_REQUEST['txtnombre'];
=======
        $data['nitproveedor']=$_REQUEST['txtnitproveedor'];
        $data['razonsocial']=$_REQUEST['txtrazonsocial'];
        $data['telefono']=$_REQUEST['txttelefono'];
        $data['direccion']=$_REQUEST['txtdireccion'];
        $data['nombrecontacto']=$_REQUEST['txtnombrecontacto'];
        $data['cargocontacto']=$_REQUEST['txtcargocontacto'];
        $data['celular']=$_REQUEST['txtcelular'];
        $data['pagweb']=$_REQUEST['txtpagweb'];
>>>>>>> 6e084ecbf733f08413c5404454bdd5ac33499439
        $this->model_p->insertar($data);
        $this->index();
    }

    function obtenerPersona(){
<<<<<<< HEAD
        $id = $_REQUEST['txtid'];
        $this->model_p->eliminar($id);
        $this->index();
=======
        $nitproveedor = $_REQUEST['txtnitproveedor'];   
        $this->model_p->eliminar($nitproveedor);
        $this->index();	

>>>>>>> 6e084ecbf733f08413c5404454bdd5ac33499439

    }

    function actPersona(){

<<<<<<< HEAD
        $data['nombre'] = $_REQUEST['txtnombre1'];
        $id = $_REQUEST['txtid'];
        $this->model_p->actualizar($data,$id);
=======
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
>>>>>>> 6e084ecbf733f08413c5404454bdd5ac33499439
        $this->index();

    }

}

?>