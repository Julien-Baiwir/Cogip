<?php
require_once('views/View.php');

class ControllerHome {

    private $_HomeManager;
    private $_view;

    public function __construct() {
        $this->_HomeManager = new HomeManager();
        $this->displayHome();
    }

    private function displayHome() {     
        $fiveCompanies = $this->_HomeManager->getFiveCompanies();  
        $fiveInvoices = $this->_HomeManager->getFiveInvoices();
        $fivecontacts = $this->_HomeManager->getFiveContacts();
        $this->_view = new View('Home');
        $this->_view->generate(array('fiveCompanies' => $fiveCompanies, 'fiveInvoices' => $fiveInvoices,'fivecontacts'=> $fivecontacts ));
    }
}




