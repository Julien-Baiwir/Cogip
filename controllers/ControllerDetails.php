<?php
require_once ('views/includes/View.php');

class ControllerDetails
{
    private $_view;
    
    public function __construct($url)
    {
        if (!isset($url[1])) {
            throw new Exception('Missing company ID');
        }

        $companyId = $url[1];

        try {
            $detailsCompaniesManager = new DetailsCompaniesManager();

          
            $detailsCompanies = $detailsCompaniesManager->getDetailsCompany($companyId);
            $detailsContacts = $detailsCompaniesManager->getDetailsContacts($companyId);
            $detailsInvoices = $detailsCompaniesManager->getDetailsInvoices($companyId);

            $this->_view = new View('DetailsCompanies');
            $this->_view->generate(array('detailsCompanies' =>$detailsCompanies,'detailsContacts' =>$detailsContacts,'detailsInvoices' =>$detailsInvoices ));


        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}


?>





 






 
