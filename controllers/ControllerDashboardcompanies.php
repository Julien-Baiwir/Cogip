<?php
error_reporting(E_ALL); ini_set('display_errors', '1');

require_once('dashboard/includes/ViewBoard.php');

class ControllerDashboardcompanies {
    private $_view;
    private $_companiesManager;

    public function __construct($url) {
        $this->_companiesManager = new DashboardCompaniesManager();
        
        // Vérifie si des données de formulaire ont été soumises
        if (isset($url[1]) && $url[1] === 'addCompany') {
            $this->addCompany();
        } else {
            $this->displayDashboard();
        }
    }

    private function displayDashboard() {    
        $fiveCompanies = $this->_companiesManager->getFiveCompanies();

        $this->_view = new ViewBoard('DashboardCompanies');
        $this->_view->generate(array('fiveCompanies' => $fiveCompanies)); 
    }

    public function addCompany() {
    
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
            $name = $_POST["name"];
            $tva = $_POST["tva"];
            $country = $_POST["country"];
            $type_id = $_POST["type_id"];
  
           
            $this->_companiesManager->addNewCompany($name, $tva, $country, $type_id);

          
            header("Location: index.php?url=dashboardcompanies");
            exit();
             } 

    }

}
?>




   