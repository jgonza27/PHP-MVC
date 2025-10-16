<?php

require_once __DIR__ . '/Database.php';

class Usuarios {

    // SACAR TODOS LOS DATOS
    public static function getAll(){
        $pdo = Database::getConnection();
        $stmt = $pdo->query("SELECT id, nombre, email, password FROM usuarios ORDER BY id DESC");
        return $stmt->fetchAll();
    }

    // BUSCAR POR ID
    public static function get(int $id){
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("SELECT id, nombre, email, password FROM usuarios WHERE id = ?");
        $stmt->execute([$id]); 
        return $stmt->fetch();
    }

    // CREAR
   public static function insert(string $nombre, string $email, string $password) {
    try {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("INSERT INTO usuarios (nombre, email, password) VALUES (?, ?, ?)");
        $stmt->execute([$nombre, $email, $password]);
        return (int)$pdo->lastInsertId();
    } catch (PDOException $e) {
        error_log("Error al insertar usuario: " . $e->getMessage());
        return false;
    }
}
    // ACTUALIZAR
    public static function update(int $id, string $nombre, string $email, string $password){
        try {
            $pdo = Database::getConnection();
            $stmt = $pdo->prepare("UPDATE usuarios SET nombre = :nombre, email = :email, password = :password WHERE id = :id");
                $stmt->execute([
                    ':nombre' => $nombre,
                    ':email'  => $email,
                    ':password'  => $password,
                    ':id'     => $id,
                ]);

                return true;
        } catch (PDOException $e) {
            error_log("Error al actualizar usuario: " . $e->getMessage());
            return false;
        }
        
       
    }

    // BORRAR
    public static function delete(int $id){
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
    }


    public static function validarUsuario(string $nombre , string $password){

        try {
    $pdo = Database::getConnection();

    $stmt = $pdo->prepare("SELECT * FROM usuarios WHERE nombre = ? AND password = ? ");

    $stmt->execute([$nombre,$password]);
    $resultado = $stmt->fetch();

    return $resultado ? true : false;


        } catch (\Throwable $th) {
            return false;
        }


    
    }

    
}
