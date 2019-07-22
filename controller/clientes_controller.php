<?php
require_once 'model/clientes_model.php';

class clientes_controller{
    private $model_c;

    function __construct(){
        $this->model_c = new clientes_model();
    }

    function clienteview(){
        $query = $this->model_c->get_clientes();
        require_once 'view/clientes_view.php';
                
    }
	
}

?>