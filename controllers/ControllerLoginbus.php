<?php
// LoginController.php
require_once 'LoginManager.php';
require_once 'viewLogin.php';

class LoginController {
    private $loginManager;
    private $view;

    public function __construct() {
        $this->loginManager = new LoginManager();
        $this->view = new validateInput();
    }

    public function handleLogin($email, $password) {
        if ($this->loginManager->validateInput($email, $password)) {
            $this->view->showSuccessPage();
        } else {
            $this->view->showLoginPage("Invalid email or password.");
        }
    }
}