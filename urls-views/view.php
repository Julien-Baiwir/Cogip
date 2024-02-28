<?php

// ce fichier permet de sécusier les view des différentes pages

class View
{
    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file ='views/view'.$action .'php';
    }

 // genere et affiche la vue
    private function generate($data)
    {
        //Partie spécifique de la vue
        $content = $this->generateFile($this->_file, $data);

        //TEMPLATE
        $view = $this->generateFile('view/template.php', array('t'=> $this->_t, 'content' => $content));
        echo $view;
    }

    // genere un fichier vue et renvoie le résultat produit
    private function generateFile($file , $data)
    {
        if(file_exists($file))
        {
            extract($data);
            ob_start();

            //INCLUT LE FICHIER VUE
            require $file;
            return ob_get_clean();
        }
        else 
        throw new Exception('Fichier' .$file. 'introuvable');
    }
    

}