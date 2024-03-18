<?php

class Router
{
    private $_ctrl; 
    private $_view; 

    public function routeReq()
    {
        try
        {
            // Chargement automatique des classes dans le dossier models
            spl_autoload_register(function ($class){
                require_once( 'models/'. $class . '.php'); 
            });
    

            // Gestion des URLs
            $url = '';
    
            if (!isset($_GET['url'])) {
                require_once('controllers/ControllerHome.php');
                $this->_ctrl = new ControllerHome();
                return; 
            }

            $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
    
            $controller = ucfirst(strtolower($url[0])); 
            $controllerClass = "Controller" . $controller;
            $controllerFile = "controllers/" . $controllerClass . ".php";

            
            if(file_exists($controllerFile))
            {
                require_once($controllerFile);
                $this->_ctrl = new $controllerClass($url);
            }
            else
            {
                throw new Exception('Erreur: page introuvable');
            }
            
        }
        // Si URLs non valides
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            require_once('views/viewError.php');
        }
    }
    
}
