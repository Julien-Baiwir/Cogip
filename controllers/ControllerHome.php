<?php
class ControllerHome {

    private $_HomeManager;

    public function __construct() {
        $this->_HomeManager = new HomeManager();
        $this->displayHome();
    }

    private function displayHome() {
        $fiveCompanies = $this->_HomeManager->getFiveCompanies();  // Récupérer les données des cinq entreprises
        // var_dump($fiveCompanies);
        require 'views/home.php';  // Inclure la vue home.php en transmettant la variable $fiveCompanies
    }
}



