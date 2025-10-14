<?php
namespace app\controllers;

/**
 * DiaController - Controlador para las páginas de cada día
 */
class DiaController {

    /**
     * Muestra el día 1 (Lunes 13 de octubre)
     */
    public function dia1() {
        $data = [
            'titulo' => 'Día 1 - Lunes 13 de Octubre',
            'fecha' => 'Lunes, 13 de octubre de 2025',
            'actividades' => [
                'Inauguración de la Semana de Sistemas 2025',
                'Ponencias y presentaciones iniciales',
                'Actividades de integración'
            ]
        ];

        return $this->view('dia1', $data);
    }

    /**
     * Muestra el día 2
     */
    public function dia2() {
        $data = [
            'titulo' => 'Día 2 - Martes 14 de Octubre',
            'fecha' => 'Martes, 14 de octubre de 2025',
            'mensaje' => 'Contenido en construcción. Se actualizará durante el evento.'
        ];

        return $this->view('dia_construccion', $data);
    }

    /**
     * Muestra el día 3
     */
    public function dia3() {
        $data = [
            'titulo' => 'Día 3 - Miércoles 15 de Octubre',
            'fecha' => 'Miércoles, 15 de octubre de 2025',
            'mensaje' => 'Contenido en construcción. Se actualizará durante el evento.'
        ];

        return $this->view('dia_construccion', $data);
    }

    /**
     * Muestra el día 4
     */
    public function dia4() {
        $data = [
            'titulo' => 'Día 4 - Jueves 16 de Octubre',
            'fecha' => 'Jueves, 16 de octubre de 2025',
            'mensaje' => 'Contenido en construcción. Se actualizará durante el evento.'
        ];

        return $this->view('dia_construccion', $data);
    }

    /**
     * Muestra el día 5
     */
    public function dia5() {
        $data = [
            'titulo' => 'Día 5 - Viernes 17 de Octubre',
            'fecha' => 'Viernes, 17 de octubre de 2025',
            'mensaje' => 'Contenido en construcción. Se actualizará durante el evento.'
        ];

        return $this->view('dia_construccion', $data);
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
