<<?php

error_reporting(E_ALL); ini_set('display_errors', '1');

require_once ('dashboard/includes/ViewBoard.php');

class ControllerDashboardcontacts {
    private $_view;
    private $_HomeManager;

    public function __construct($url) {
        $this->_HomeManager = new DashboardContactsManager();

        if (isset($url[1]) && $url[1] === 'addContact') {
            $this->addContact();
        } else {
            $this->displayDashboard();
        }

    }
    private function displayDashboard() {
        $contacts = $this->_HomeManager->getContacts();
        $fivecontacts = $this->_HomeManager->getFiveContacts();     
        $this->_view = new ViewBoard('DashboardContacts');
        $this->_view->generate(array('fivecontacts'=> $fivecontacts,'contacts' => $contacts)); 
    }
    
    public function addContact() {
    
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            (var_dump($_POST["name"]));
            $name = $_POST["name"];
            $email = $_POST["email"];
            $phone = $_POST["phone"];
            $company_id = $_POST["company_id"];
  
            $this->_HomeManager->addNewContact($name, $email, $phone, $company_id);
            // echo '<pre>';
            // die(var_dump($this->_HomeManager));
            // echo '</pre>';
          
            header("Location: index.php?url=dashboardcontacts");
            exit();
             } 

    }

}
?>

