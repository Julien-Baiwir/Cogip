<?php
require_once ('views/View.php');

class ControllerProfile
{
    private $_view;
    
    public function __construct($url)
    {
        if (!isset($url[1])) {
            throw new Exception('Missing Profile ID');
        }

        $profileId = $url[1];

        try {
            $profilesManager = new ProfileManager();

          
            $profiles = $profilesManager->getProfile($profileId);
          
           
            $this->_view = new View('Profile');
            $this->_view->generate(array('profile' =>$profiles));


        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}