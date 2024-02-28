<?php

class Companies{

    private $_id;
    private $_title;
    // ici on ajoute toutes les différentes colonnes de la table ( tva, noms, contacts etc..)

    // Constructeur
    public function __construct(array $data)
    {
        $this->hydrate($data); // récupère le paramètre data dans notre model.php

        foreach($data as $key => $value){
            $method ='set'.ucfirst($key); // variable est égale au setter
            if(method_exists($this, $method))
                $this->$method($value);  
        }
    }

    // Setters
    public function setId($id)
    {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setTitle($title)
    {
        if (is_string($title)) {
            $this->_title = $title;
        }
    }
    // créer d'autres fonctions qui viennent préparer les autres données de la table

    // Getters fonctions qui viennent récupérer les données (car les variables sont privées
    // pour une bonne protection des données, obligé de passer par des getters pour sortir 
    // les données de la classe)
    public function getId()
    {
        return $this->_id;
    }

    public function getTitle()
    {
        return $this->_title;
    }
}
