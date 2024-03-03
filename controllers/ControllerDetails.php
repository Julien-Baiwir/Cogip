<?php
class ControllerDetails
{
    public function __construct($url)
    {
        if (!isset($url[1])) {
            throw new Exception('Missing company ID');
        }

        $companyId = $url[1];

        $detailsCompaniesManager = new DetailsCompaniesManager();

        try {
        
            $company = $detailsCompaniesManager->getCompanyById($companyId);

            if ($company) {
                require_once('ok.php'); // Inclure la vue ok.php
            } else {
                throw new Exception('Company not found');
            }
        } catch (Exception $e) {
            // Gérer les erreurs
            echo "Error: " . $e->getMessage();
        }
    }
}
?>



 
