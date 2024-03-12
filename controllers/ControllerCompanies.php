<?php
require_once ('views/includes/View.php');

class ControllerCompanies 
{
    private $_CompaniesManager;
    private $_view;

    public function __construct($url) {
        if (isset($url) && count($url) > 1) {
            throw new Exception('Page introuvable');
        } else {
            $this->_CompaniesManager = new CompaniesManager;
            $this->companies();
        }

    }

    private function companies() {
        $companies = $this->_CompaniesManager->getCompanies();  
        
        $this->_view = new View('Companies');
        $this->_view->generate(array('companies' => $companies ));

    }
}