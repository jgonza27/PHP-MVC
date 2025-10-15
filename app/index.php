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


    case 'get':
      $id = $_GET['id'];
      if ($id === null) {
        echo "Falta el parámetro 'id' en la URL.";
        exit;
    }
    $usuario = Usuarios::get($id);
      if (!$usuario) {
        echo "No se encontró el usuario con ID $id.";
    } else {
        include __DIR__ . '/views/idList.php';
    }
    break;


    case 'insert':
        include __DIR__ . '/views/insert.php';
        break;


    case 'insertData':
        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        if ($nombre === null || $email === null || $password === null ) {
        echo "Falta el parámetros en la URL.";
        exit;
        }
        $resultado =  Usuarios::insert($nombre, $email, $password);
     if (!$resultado) {
        echo "No se ha insertado correctamente";
    } else {
        echo "Se ha insertado correctamente";
    }
      
    break;



    default:
        http_response_code(404);
        echo 'Acción no soportada';
        
}
