<?php
/**
 * Autoloader - Carga automática de clases
 * Evita usar require_once en cada archivo
 */

spl_autoload_register(function($clase) {
    // Convierte namespace\Clase a ruta/Clase.php
    $ruta = "../" . str_replace("\\", "/", $clase) . ".php";

    if(file_exists($ruta)) {
        require_once($ruta);
    } else {
        die("No se pudo cargar la clase: $clase (Buscando en: $ruta)");
    }
});
?>
