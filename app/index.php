<?php
session_start();
require("appController.php");

$controller = new AppController();

$user = ["login", "listar", "listarId" , "vistaLogout" , "close"];


if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {


    if($_SESSION['usuario'] == 'admin'){

        $action = $_GET['action'] ?? 'listar';
    if (method_exists($controller, $action)) {

        if($action == "close"){
            $controller->$action();
            $controller->login();



        }else{
            $controller->$action();
            $controller->vistaLogout();
        }

    }else {
        echo "Acción '$action' no encontrada.";
    }

    }else{

        $action = $_GET['action'] ?? 'listar';
    if (method_exists($controller, $action) && in_array($action, $user, true)) {

        if($action == "close"){
            $controller->$action();
            $controller->login();



        }else{
            $controller->$action();
            $controller->vistaLogout();
        }

    }else {
        echo "Acción '$action' no encontrada.";
    }


    }
    
    
} else {
    $controller->login();
}



?>
