<?php
// The front-controller.

spl_autoload_register(function($classname) {
    if (strpos($classname, 'Controller') !== false) {
        $classFile = '../controllers/' . $classname . '.php';
        include $classFile;
    }

});

$context = $action = null;
if (!empty($_GET['context'])) {
    $context = filter_input(INPUT_GET, 'context', FILTER_SANITIZE_STRING);
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
}
if (!$context || $context == "home" && $action == "index") {
    header('Location: .');
}

// Fix case-sensitive file systems (e.g., Linux).
$controllerName = ucfirst($context) . "Controller";
if (class_exists($controllerName)) {

    $controller = new $controllerName();
    $methodName = $action . 'Action';
    if (method_exists($controller, $methodName)) {
        $controller->$methodName();
    }
}
