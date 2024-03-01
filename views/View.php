<?php

// Ce fichier permet de gérer les vues des différentes pages

class View
{
    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'views/view'.$action .'.php';
    }

    // Génère et affiche la vue
    public function generate($data)
    {
        // Partie spécifique de la vue
        $content = $this->generateFile($this->_file, $data);

        // Modèle
        $view = $this->generateFile('views/includes/template.php', array('t'=> $this->_t, 'content' => $content));
        echo $view;
    }

    // Génère un fichier vue et renvoie le résultat produit
    private function generateFile($file , $data)
    {
        if(file_exists($file))
        {
            extract($data);
            ob_start();
            // Inclut le fichier vue
            require $file;
            return ob_get_clean();
        }
        else 
        {
            throw new Exception('Fichier ' .$file. ' introuvable');
        }
    }
}
