<?php

namespace App;

class Connection {

    public static function getDb() {
       try {
            $conn = new \Pdo(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                "root",
                ""
            );

            return $conn;

       } catch(\PDOException $e) {
            echo "Error encontrado: " . $e->getMessage();
       } 
    }
}