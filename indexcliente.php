<?php
require_once 'bd/conexion.php';
require_once 'controller/clientes_controller.php';
$controller = new clientes_controller();
if(!empty($_REQUEST['m'])){
    $metodo = $_REQUEST['m'];
    if(method_exists($controller,$metodo)){
        $controller->$metodo();
    }else{
        $controller->clienteview();
    }
}else{
    $controller->clienteview();
}
?>