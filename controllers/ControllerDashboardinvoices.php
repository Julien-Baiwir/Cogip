<<?php

require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboardinvoices {
    private $_view;
    private $_HomeManager;
    
    public function __construct() {
        $this->_HomeManager = new DashboardManager();
        $this->displayDashboard();
    }

    private function displayDashboard() { 
        $fiveInvoices = $this->_HomeManager->getFiveInvoices();    
        $this->_view = new ViewBoard('DashboardInvoices');
        $this->_view->generate(array('fiveInvoices' => $fiveInvoices)); 
    }
}

?>



