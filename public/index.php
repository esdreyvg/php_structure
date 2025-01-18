<?php
require_once '../vendor/autoload.php';
require_once '../config/config.php';
require_once '../config/controllers.php';

$controllerName = $_GET['controller'] ?? 'home';
$action = $_GET['action'] ?? 'index';

if (isset($controllers[$controllerName])) {
    $controllerClass = $controllers[$controllerName];
    $controller = new $controllerClass();

    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        echo "La acción '$action' no existe en el controlador '$controllerName'.";
    }
} else {
    echo "El controlador '$controllerName' no está registrado.";
}