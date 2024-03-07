<?php
require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboard {

    private $_HomeManager;
    private $_view;

    public function __construct() {
        $this->_HomeManager = new DashboardManager();
        $this->displayHome();
    }

    private function displayHome() {     
        $fiveCompanies = $this->_HomeManager->getFiveCompanies();  
        $fiveInvoices = $this->_HomeManager->getFiveInvoices();
        $fivecontacts = $this->_HomeManager->getFiveContacts();
        $statistics = $this->_HomeManager->getStats();
        $this->_view = new ViewBoard('Dashboard');
        $this->_view->generate(array('fiveCompanies' => $fiveCompanies, 'fiveInvoices' => $fiveInvoices,'fivecontacts'=> $fivecontacts, 'statistics' => $statistics ));
    }
}




