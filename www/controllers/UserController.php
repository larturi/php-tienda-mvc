<?php 

require_once 'models/User.php';
class UserController {

    public function index() {
        echo "UserController::index";
    }

    public function create() {
        if(isset($_POST)) {
            $user = new User();
            $user->setNombre($_POST['nombre']);
            $user->setApellidos($_POST['apellidos']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);

            $save = $user->save();

            if($save) {
                $_SESSION['register'] = 'complete';
                // header('Location: ' .BASE_URL. '/login.php');
            } else {
                $_SESSION['register'] = 'failed';
            }
        } 
    }

}