<<?php

require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboardcontacts {
    private $_view;
    private $_contactsManager;

    public function __construct() {
        $this->displayDashboard();
    }

    private function displayDashboard() {     
        $this->_view = new ViewBoard('DashboardContacts');
        $this->_view->generate(array()); 
    }
}

?>