
<?php

require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'config/db.php';
require_once './views/partials/header.php';

if(isset($_GET['controller'])) {
    $classController = $_GET['controller'].'Controller';
} else {
    $classController = DEFAULT_CONTROLLER;
}

if(class_exists($classController)) {
    $controller = new $classController();
    
    if(isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $controller->{$_GET['action']}();
    } else {
        $controller->{DEFAULT_ACTION}();
    }
} else {
    $error = new ErrorController();
    $error->index();
}

require_once('./views/partials/footer.php');