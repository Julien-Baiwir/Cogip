<<?php

require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboardinvoices {
    private $_view;

    public function __construct() {
        $this->displayDashboard();
    }

    private function displayDashboard() {     
        $this->_view = new ViewBoard('DashboardInvoices');
        $this->_view->generate(array()); 
    }
}

?>