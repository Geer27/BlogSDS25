<?php
namespace lib;

/**
 * Clase Route - Sistema de enrutamiento simple
 * Maneja las rutas GET y POST de la aplicación
 */
class Route {
    // Almacena todas las rutas registradas
    private static $routes = [];

    // URL base del proyecto
    private static $URL_BASE = "";

    /**
     * Registra una ruta GET
     * @param string $uri - La ruta (ej: "/", "/dia/:numero")
     * @param mixed $callback - Función anónima o [Controller::class, "metodo"]
     */
    public static function get($uri, $callback) {
        self::$routes["GET"][self::$URL_BASE . $uri] = $callback;
    }

    /**
     * Registra una ruta POST
     * @param string $uri - La ruta
     * @param mixed $callback - Función anónima o [Controller::class, "metodo"]
     */
    public static function post($uri, $callback) {
        self::$routes["POST"][self::$URL_BASE . $uri] = $callback;
    }

    /**
     * Procesa la petición y ejecuta la ruta correspondiente
     */
    public static function dispatch() {
        $uri = $_SERVER["REQUEST_URI"];
        $method = $_SERVER["REQUEST_METHOD"];

        // Iterar sobre las rutas del método actual
        foreach(self::$routes[$method] as $url => $funcion) {

            // Si la ruta contiene parámetros (ej: :id, :nombre)
            if(strpos($url, ":") !== false) {
                // Convertir :parametro a expresión regular
                $url = preg_replace("#:[a-zA-Z]+#", "([a-zA-Z0-9]+)", $url);
            }

            // Comprobar si la URL coincide
            if(preg_match("#^$url$#", $uri, $matches)) {
                // Extraer parámetros de la URL
                $params = array_slice($matches, 1);

                // Ejecutar callback (función anónima)
                if(is_callable($funcion)) {
                    $response = $funcion(...$params);
                }

                // Ejecutar controlador [Clase, "metodo"]
                if(is_array($funcion)) {
                    $controller = new $funcion[0];
                    $response = $controller->{$funcion[1]}(...$params);
                }

                // Enviar respuesta
                if(is_array($response) || is_object($response)) {
                    header("Content-Type: application/json");
                    echo json_encode($response);
                } else {
                    echo $response;
                }
                return;
            }
        }

        // Si no se encuentra la ruta
        http_response_code(404);
        echo "404 - Página no encontrada";
    }
}
?>
