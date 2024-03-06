<?php
require_once('views/View.php');

class ControllerLogin {

    private $_view;

    public function __construct() {
        $this->displayLoginPage();
    }

    private function displayLoginPage() {     
        $this->_view = new View('Login');
       
    }
}

class ControllerLogin {
    private $_view;

    public function __construct() {
        $this->displayLoginPage();
    }

    private function displayLoginPage() {     
        $this->_view = new View('Login');
        $this->_view->generate(array()); // Vous pouvez passer des données à afficher dans la vue si nécessaire
    }
}
?>
