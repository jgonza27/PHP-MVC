<?php

require("models/Database.php");
require("models/Usuarios.php");


class AppController {

function login() {

    if (!isset($_GET['nombre']) || !isset($_GET['password'])) {
        include("views/login.php");
        return; 
    }

    $nombre = $_GET['nombre'];
    $password = $_GET['password'];

    $resultado = Usuarios::validarUsuario($nombre, $password);

    if ($resultado) {
        $_SESSION['usuario'] = $nombre;
        header("Location: index.php"); 
        exit;
    } else {
        echo "Credenciales incorrectas";
    }
}


    public function listar(){
       $usuarios = Usuarios::getAll();
        include ("views/list.php");

     }

     
     
     public function listarId(){
        $id = $_GET['id'];
      if ($id === null) {
        echo "Falta el parámetro 'id' en la URL.";
        exit;
    }
    $usuario = Usuarios::get($id);
      if (!$usuario) {
        echo "No se encontró el usuario con ID $id.";
    } else {
        include ("views/idList.php");
    }

     }




     public function insert(){
        include ("views/insert.php");
        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        if ($nombre == null || $email == null || $password == null ) {
        exit;
        }
        $resultado =  Usuarios::insert($nombre, $email, $password);
     if (!$resultado) {
        echo "No se ha insertado correctamente";
    } else {
        echo "Se ha insertado correctamente";
    }

     }




     public function update(){
         include ("views/update.php");
        $id = $_GET['id'];
        $nombre = $_GET['nombre'];
        $email = $_GET['email'];
        $password = $_GET['password'];
        if ($id == null || $nombre == null || $email == null || $password == null ) {
        exit;
        }
        $resultado =  Usuarios::update($id, $nombre, $email, $password);
        if ($resultado) {
            echo "Se ha actualizado correctamente";
        } else {
           echo "No ha actualizado correctamente";
       }
    }



      
    public function delete(){
         include ("views/delete.php");
        $id = $_GET['id'];
        
        if ($id == null) {
        exit;
        }
        Usuarios::delete($id);
    }
      
     }

       

      
        

