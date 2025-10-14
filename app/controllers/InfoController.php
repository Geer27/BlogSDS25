<?php
namespace app\controllers;

/**
 * InfoController - Controlador para la página de información personal
 */
class InfoController {

    /**
     * Muestra la página de información personal del estudiante
     */
    public function index() {
        $data = [
            'titulo' => 'Mi Información',
            'nombre' => 'German Daniel Hernández Pinto',
            'carnet' => 'HP19012',
            'carrera' => 'Ingeniería de Sistemas Informáticos',
            'universidad' => 'Universidad de El Salvador',
            'facultad' => 'Facultad Multidisciplinaria Oriental',
            'email' => 'hp19012@ues.edu.sv'
        ];

        return $this->view('mi_info', $data);
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
