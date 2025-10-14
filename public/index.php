<?php
/**
 * Punto de entrada único de la aplicación
 * Todas las peticiones pasan por aquí gracias a .htaccess
 */

// Cargar autoloader
require_once("../autoloader.php");

// Cargar rutas
require_once("../routes/web.php");
?>
