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

       
            $company = $detailsCompaniesManager->getCompanyById($companyId);

            if ($company) {
          
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





 
