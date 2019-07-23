<?php
require_once 'bd/conexion.php';

require_once 'controller/venta_controller/venta_controller.php';

$controller = new venta_controller();



if(!empty($_REQUEST['m'])){
    $metodo = $_REQUEST['m'];
    if(method_exists($controller,$metodo)){
        $controller->$metodo();
    }else{
        $controller->index();
    }
}else{
    $controller->index();
}


?>