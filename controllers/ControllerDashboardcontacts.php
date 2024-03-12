<<?php

require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboardcontacts {
    private $_view;
    private $_HomeManager;

    public function __construct() {
        $this->_HomeManager = new DashboardContactsManager();
        $this->displayDashboard();
    }

    private function displayDashboard() {
        $fivecontacts = $this->_HomeManager->getFiveContacts();     
        $this->_view = new ViewBoard('DashboardContacts');
        $this->_view->generate(array('fivecontacts'=> $fivecontacts)); 
    }
}
?>