<?php
session_start();
require("appController.php");

$controller = new AppController();

if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
    $action = $_GET['action'] ?? 'listar';
    if (method_exists($controller, $action)) {

        if($action == "close"){
            $controller->$action();
            $controller->login();



        }else{
            $controller->$action();
            $controller->vistaLogout();
        }
        
    } else {
        echo "Acción '$action' no encontrada.";
    }
} else {
    $controller->login();
}



?>
