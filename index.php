<?php
require_once 'bd/conexion.php';
require_once 'controller/persona_controller.php';
$controller = new persona_controller();
/*Conexion Inicial*/
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