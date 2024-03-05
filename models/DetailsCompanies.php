<?php

class DetailsCompanies
{
    private $_id;
    private $_name;
    private $_country;
    private $_tva;
    private $_typeName;

    public function __construct(array $data)
    {
        
        if (isset($data['id'], $data['name'], $data['country'], $data['tva'], $data['type_name'])) {
            $this->_id = $data['id'];
            $this->_name = $data['name'];
            $this->_country = $data['country'];
            $this->_tva = $data['tva'];
            $this->_typeName = $data['type_name'];
        } else {
            throw new InvalidArgumentException('Error: Missing required data for Company.');
        }
    }
    

    // Getters for company properties

    public function getId()
    {
        return $this->_id;
    }

    public function getCompanyName()
    {
        return $this->_name;
    }


    public function getCountry()
    {
        return $this->_country;
    }

    public function getTva()
    {
        return $this->_tva;
    }

    public function getTypeName()
    {
        return $this->_typeName;
    }
}



?>


