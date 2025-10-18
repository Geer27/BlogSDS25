<?php
namespace app\controllers;

use app\models\Visita;

/**
 * VisitaController - Controlador para el formulario de visitas
 */
class VisitaController {

    /**
     * Muestra el formulario de registro de visitas
     */
    public function formulario() {
        $data = [
            'titulo' => 'Registrar Visita'
        ];

        return $this->view('formulario_visitas', $data);
    }

    /**
     * Procesa el registro de una nueva visita
     */
    public function registrar() {
        if($_SERVER['REQUEST_METHOD'] !== 'POST') {
            header('Location: /visitas');
            exit;
        }

        $nombre = $_POST['nombre'] ?? '';
        $email = $_POST['email'] ?? '';
        $comentario = $_POST['comentario'] ?? '';

        // Validar datos
        if(empty($nombre) || empty($email)) {
            return $this->view('formulario_visitas', [
                'titulo' => 'Registrar Visita',
                'error' => 'Nombre y email son obligatorios'
            ]);
        }

        // Guardar visita
        $visitaModel = new Visita();
        $resultado = $visitaModel->crear($nombre, $email, $comentario);

        if($resultado) {
            return $this->view('formulario_visitas', [
                'titulo' => 'Registrar Visita',
                'exito' => '¡Gracias por registrar tu visita!'
            ]);
        } else {
            return $this->view('formulario_visitas', [
                'titulo' => 'Registrar Visita',
                'error' => 'Error al registrar la visita'
            ]);
        }
    }

    public function listar() {
        $visitaModel = new Visita();
        $visitas = $visitaModel->obtenerTodas();

        return [
            'total' => count($visitas),
            'visitas' => $visitas
        ];
    }

    /**
     * Carga una vista con datos
     */
    private function view($vista, $data = []) {
        extract($data);
        $rutaVista = "../app/views/$vista.php";

        if(file_exists($rutaVista)) {
            ob_start();
            include $rutaVista;
            $contenido = ob_get_clean();
            return $contenido;
        } else {
            return "Vista no encontrada: $rutaVista";
        }
    }
}
?>