<?php

class ControllerCompanies {
    private $_CompaniesManager;

    public function __construct($url) {
        if (isset($url) && count($url) > 1) {
            throw new Exception('Page introuvable');
        } else {
            $this->companies();
        }
    }

    private function companies() {
        $this->_CompaniesManager = new CompaniesManager;
        // Ici c'est crucial on instancie models/CompaniesManager.php qui contient une fonction publique

        $companies = $this->_CompaniesManager->getCompanies();  // on déclare une variable qui est égale à $companies
        // var_dump($companies);
        // require_once('views/companies/index.php');
        require 'views/viewCompanies.php';
    }
}
