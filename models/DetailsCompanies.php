<?php

class DetailsCompanies
{
    private $_id;
    private $_name;
    private $_type_id;
    private $_country;
    private $_tva;


    public function __construct(array $data)
    {
        if (isset($data['id'], $data['name'], $data['type_id'], $data['country'], $data['tva'], $data['created_at'], $data['update_dat'])) {
            $this->setId($data['id']);
            $this->setName($data['name']);
            $this->setTypeId($data['type_id']);
            $this->setCountry($data['country']);
            $this->setTva($data['tva']);
   
        } else {
            throw new InvalidArgumentException('Invalid data array.');
        }
    }

    public function setId($id)
    {
        if (is_numeric($id)) {
            $this->_id = (int) $id;
        } else {
            throw new InvalidArgumentException('ID must be a numeric value.');
        }
    }

    public function setName($name)
    {
        if (is_string($name)) {
            $this->_name = $name;
        } else {
            throw new InvalidArgumentException('Name must be a string value.');
        }
    }

    public function setTypeId($type_id)
    {
        if (is_numeric($type_id)) {
            $this->_type_id = (int) $type_id;
        } else {
            throw new InvalidArgumentException('Type ID must be a numeric value.');
        }
    }

    public function setCountry($country)
    {
        if (is_string($country)) {
            $this->_country = $country;
        } else {
            throw new InvalidArgumentException('Country must be a string value.');
        }
    }

    public function setTva($tva)
    {
        if (is_string($tva)) {
            $this->_tva = $tva;
        } else {
            throw new InvalidArgumentException('TVA must be a string value.');
        }
    }


    public function getId()
    {
        return $this->_id;
    }

    public function getName()
    {
        return $this->_name;
    }

    public function getTypeId()
    {
        return $this->_type_id;
    }

    public function getCountry()
    {
        return $this->_country;
    }

    public function getTva()
    {
        return $this->_tva;
    }

}
