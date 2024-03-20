<?php

require_once('views/includes/View.php');
require_once('models/LoginManager.php');

class ControllerLogin {
    private $LoginManager;
    private $_view;

    public function __construct() {
        $this->LoginManager = new LoginManager();
        $this->handleLogin();
    }

    public function handleLogin() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($this->LoginManager->isValid($email, $password)) {
                $this->_view = new View('Dashboard');
            } else {
                $this->_view = new View('Login');
            }
        } else {
            $this->_view = new View('Login');
        }
    }
}

?>
 