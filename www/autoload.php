<?php 
 
function autoload_controllers($classname) {
    include './controllers/' . ucfirst($classname) . '.php';
}

spl_autoload_register('autoload_controllers');
