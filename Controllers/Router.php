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
                require_once('models/' . $class . '.php'); // Correction ici
            });

            $url = '';

            if(isset($_GET['url']))
            {
                $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

                $controller = ucfirst(strtolower($url[0])); // Correction ici

                $controllerClass = "Controller" . $controller;

                $controllerFile = "controllers/" . $controllerClass . ".php"; // Correction ici

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
            else
            {
                require_once('controllers/homePageController.php'); // Correction ici
                $this->_ctrl = new HomePageController($url); // Correction ici
            }

        }
        catch(Exception $e)
        {
            $errorMsg = $e->getMessage();
            require_once('views/viewError.php');
        }
    }
}
