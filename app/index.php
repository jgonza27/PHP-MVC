<?php
require_once __DIR__ . '/models/Database.php';
require_once __DIR__ . '/models/Usuarios.php';

$action = $_GET['action'] ?? 'list';        

if ($action == null){
    $action = "list";
}

switch ($action) {
    case 'list':
        $usuarios = Usuarios::getAll();
        include __DIR__ . '/views/list.php';
        break;
    default:
        http_response_code(404);
        echo 'Acción no soportada';
}
