<?php

class ControllerDetails
{
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

          
            if ($detailsCompanies && $detailsContacts && $detailsInvoices  ) {
                require_once('ok.php');
            } else {
                throw new Exception('Company not found');
            }
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}


?>



 






 
