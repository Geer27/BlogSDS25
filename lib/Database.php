<?php
namespace lib;

use PDO;
use PDOException;

/**
 * Clase Database - Conexión a base de datos con PDO
 * Implementa el patrón Singleton para una única conexión
 */
class Database {
    // Configuración de la base de datos
    private $host = "db";
    private $db_name = "blog_db";
    private $username = "bloguser";
    private $password = "blogpass";
    private $conn = null;

    /**
     * Obtiene la conexión PDO
     * @return PDO - Objeto de conexión
     */
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

    /**
     * Ejecuta una consulta preparada
     * @param string $sql - Consulta SQL
     * @param array $params - Parámetros para bindear
     * @return PDOStatement
     */
    public function query($sql, $params = []) {
        $stmt = $this->getConnection()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }

    /**
     * Inserta un registro y retorna el ID
     * @param string $sql - Consulta INSERT
     * @param array $params - Parámetros
     * @return string - Último ID insertado
     */
    public function insert($sql, $params = []) {
        $this->query($sql, $params);
        return $this->getConnection()->lastInsertId();
    }

    /**
     * Actualiza o elimina registros
     * @param string $sql - Consulta UPDATE o DELETE
     * @param array $params - Parámetros
     * @return int - Número de filas afectadas
     */
    public function execute($sql, $params = []) {
        $stmt = $this->query($sql, $params);
        return $stmt->rowCount();
    }
}
?>
