<<?php

require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboard {
    private $_view;

    public function __construct() {
        $this->displayDashboard();
    }

    private function displayDashboard() {     
        $this->_view = new ViewBoard('Dashboard');
        $this->_view->generate(array()); 
    }
}

?>

