<?php

require_once('autoload.php');
require_once('./views/partials/header.php');

if(isset($_GET['controller'])) {
    $classController = $_GET['controller'].'Controller';
} else {
    $classController = 'home';
}

if(class_exists($classController)) {
    $controller = new $classController();
    
    if(isset($_GET['action']) && method_exists($controller, $_GET['action'])) {
        $controller->{$_GET['action']}();
    } else {
        echo 'Error 404';
    }
} else {
    echo 'Error 404';
}

require_once('./views/partials/footer.php');
