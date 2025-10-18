<?php
namespace lib;

use PDO;
use PDOException;


class Database {
    // Configuración de la base de datos
    private $host = "db";
    private $db_name = "blog_db";
    private $username = "bloguser";
    private $password = "blogpass";
    private $conn = null;

    public function getConnection() {
        // Si ya existe conexión, retornarla
        if($this->conn !== null) {
            return $this->conn;
        }

        try {
            // Crear nueva conexión PDO
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db_name;

            $this->conn = new PDO($dsn, $this->username, $this->password);

            // Configurar charset UTF-8
            $this->conn->exec("SET NAMES utf8");

            // Configurar modo de error: lanzar excepciones
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // Configurar modo de fetch por defecto
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch(PDOException $e) {
            echo "Error de conexión: " . $e->getMessage();
            die();
        }

        return $this->conn;
    }


    public function query($sql, $params = []) {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }


    public function insert($sql, $params = []) {
        $this->query($sql, $params);
        return $this->getConnection()->lastInsertId();
    }


    public function execute($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->rowCount();
    }
}
?>
