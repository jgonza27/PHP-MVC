<?php
session_start();
require("appController.php");

$controller = new AppController();

if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario'])) {
    $action = $_GET['action'] ?? 'listar';
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        echo "Acción '$action' no encontrada.";
    }
} else {
    $controller->login();
}
?>
