<?php 

class UserController {

    public function index() {
        echo "UserController::index";
    }

    public function register() {
        require_once 'views/user/register.php';
    }

    public function create() {
        if(isset($_POST)) {
            var_dump($_POST);
        }
    }

}