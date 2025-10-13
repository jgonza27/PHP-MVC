<?php

class Database {
    private static $pdo = null;

    public static function getConnection(){
        if (self::$pdo === null) {
            $host = 'mariadb';
            $db   = 'usuarios';  
            $user = 'root';
            $pass = '1234';
            $charset = 'utf8mb4';

            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
            $options = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            self::$pdo = new PDO($dsn, $user, $pass, $options);
        }
        return self::$pdo;
    }
}
