<?php

class ControllerCompanies{
    private $_CompaniesManager;
    private $_view;

    public function __construct($url){
        if (isset($url) && count($url) >1)
        throw new Exception('Page introuvable');
    else$this->articles();
    }

    private function companies()
    {
        $this->companiesManager = new CompaniesManager;
        $companies = $this->_companiesManager->getCompanies();

        require_once('views/companies/index.php');

        // Ici il faudra modifier pour faire une fonction sécuriser.
    }

}