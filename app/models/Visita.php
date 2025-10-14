<?php
namespace app\models;

use lib\Database;

/**
 * Modelo Visita - Maneja las operaciones de la tabla visitas
 */
class Visita {
    private $db;
    private $conn;

    public function __construct() {
        $this->db = new Database();
        $this->conn = $this->db->getConnection();
    }

    /**
     * Crea una nueva visita en la base de datos
     */
    public function crear($nombre, $email, $comentario) {
        $sql = "INSERT INTO visitas (nombre, email, comentario) VALUES (:nombre, :email, :comentario)";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':nombre', $nombre);
            $stmt->bindParam(':email', $email);
            $stmt->bindParam(':comentario', $comentario);

            return $stmt->execute();
        } catch(\PDOException $e) {
            return false;
        }
    }

    /**
     * Obtiene todas las visitas
     */
    public function obtenerTodas() {
        $sql = "SELECT * FROM visitas ORDER BY fecha_visita DESC";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch(\PDOException $e) {
            return [];
        }
    }

    /**
     * Cuenta el total de visitas
     */
    public function contarVisitas() {
        $sql = "SELECT COUNT(*) as total FROM visitas";

        try {
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();
            $resultado = $stmt->fetch();
            return $resultado['total'];
        } catch(\PDOException $e) {
            return 0;
        }
    }
}
?>
