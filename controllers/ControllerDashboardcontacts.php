<<?php

require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboardcontacts {

    private $_HomeManager;
    private $_view;

    public function __construct() {
        $this->_HomeManager = new DashboardManager();
        $this->displayHome();
    }

    private function displayHome() {     
        $fivecontacts = $this->_HomeManager->getFiveContacts();
        $this->_view = new ViewBoard('DashboardContacts');
        $this->_view->generate(array('fivecontacts'=> $fivecontacts));
    }
}

?>