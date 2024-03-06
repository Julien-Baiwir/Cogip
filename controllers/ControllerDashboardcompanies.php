<<?php

require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboardcompanies {
    private $_view;

    public function __construct() {
        $this->displayDashboard();
    }

    private function displayDashboard() {     
        $this->_view = new ViewBoard('Dashboardcompanies');
        $this->_view->generate(array()); 
    }
}

?>