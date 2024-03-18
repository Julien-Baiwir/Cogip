<<?php

require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboardcompanies {
    private $_view;
    private $_companiesManager;

    public function __construct() {
        $this->_companiesManager = new DashboardCompaniesManager();
        $this->displayDashboard();
    }

    private function displayDashboard() {    
        $fiveCompanies = $this->_companiesManager->getFiveCompanies();

        $this->_view = new ViewBoard('DashboardCompanies');
        $this->_view->generate(array('fiveCompanies' => $fiveCompanies)); 
    }
}
?>



   