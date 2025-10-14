<?php
namespace app\controllers;

/**
 * HomeController - Controlador de la página de inicio
 */
class HomeController {

    /**
     * Muestra la página de inicio/bienvenida
     */
    public function index() {
        $data = [
            'titulo' => 'Semana de Sistemas 2025',
            'subtitulo' => 'Blog de Documentación',
            'descripcion' => 'Bienvenido al blog de la Semana de Sistemas 2025 de la Universidad de El Salvador, Facultad Multidisciplinaria Oriental. Aquí documentamos todas las actividades, ponencias, talleres y eventos recreativos desarrollados durante los 5 días del evento.'
        ];

        return $this->view('home', $data);
    }

    /**
     * Carga una vista con datos
     * @param string $vista - Nombre del archivo de vista
     * @param array $data - Datos para la vista
     * @return string - HTML renderizado
     */
    private function view($vista, $data = []) {
        // Convertir array en variables
        extract($data);

        // Ruta del archivo de vista
        $rutaVista = "../app/views/$vista.php";

        if(file_exists($rutaVista)) {
            // Capturar el output
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
