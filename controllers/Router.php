<?php

class Router
{
    private $_ctrl; 
    // private $_view; on s'occupe de çà en fin de projet, c'est pour masquer les url ou les rendre propres

    public function routeReq()
    {
        try
        {
            // Chargement automatique des classes dans le dossier models
            spl_autoload_register(function ($class){
                require_once('models/' . $class . '.php'); 
            });
    
            $url = '';
    
            // Si aucune URL spécifique n'est demandée, rediriger vers la page home
            if (!isset($_GET['url'])) {
                require_once('views/home.php');
                return; 
            }
    
            // Quand l'utilisateur clique sur un lien, on déclèche la créationd de l'URL qui correspond à une classe précise
            $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));
    
            $controller = ucfirst(strtolower($url[0])); // Convertit "companies" en "Companies"
            $controllerClass = "Controller" . $controller;
            $controllerFile = "controllers/" . $controllerClass . ".php";

            // La fonction $_GET['url'] est utilisée pour récupérer la partie de l'URL qui est passée en paramètre avec le nom "url". http://localhost/Cogip/index.php?url=companies
    
            if(file_exists($controllerFile))
            {
                require_once($controllerFile);
                $this->_ctrl = new $controllerClass($url);
            }
            else
            {
                throw new Exception('Page introuvable');
            }
            
        }
        // Gestion des erreurs
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            require_once('views/viewError.php');
        }
    }
    
}
