<?php

class ControllerHomePage{
    private $_CompaniesManager;
    private $_view;

    public function __construct($url){
        if (isset($url) && count($url) >1)
        throw new Exception('Page introuvable');
    else$this->articles();
    }

    private function articles()
    {
        $this->articleManager = new CompaniesManager;
        $companies = $this->_companiesManager->getCompanies();

        require_once('views/home.php')
    }

}