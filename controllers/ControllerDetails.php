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

            // Fetch company details
            $company = $detailsCompaniesManager->getDetailsCompany($companyId);
            
            // Fetch company contacts
            $contacts = $detailsCompaniesManager->getDetailsContacts($companyId);
           
            $invoices= $detailsCompaniesManager->getDetailsInvoices($companyId);

            if ($company && $contacts && $invoices) {
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






 
