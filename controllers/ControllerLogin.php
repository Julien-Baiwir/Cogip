<?php
require_once ('views/includes/View.php');

class ControllerLogin {
    private $_view;

    public function __construct() {
        $this->displayLoginPage();
    }

    private function displayLoginPage() {     
        $this->_view = new View('Login');
        $this->_view->generate(array()); 
    }
}
?>
