<?php

class Companies {

    private $_id;
    private $_name;
    private $_type_id;
    private $_country;
    private $_tva;
    private $_created_at;
    private $_update_at;

   private $_type_name;


    // Constructor
    public function __construct(array $data) {
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // Setters

    public function setType_name($type_name) {
        if (is_string($type_name)) {
            $this->_type_name = $type_name;
        }
    }


    public function setId($id) {
        $id = (int) $id;
        if ($id > 0) {
            $this->_id = $id;
        }
    }

    public function setName($name) {
        if (is_string($name)) {
            $this->_name = $name;
        }
    }

    public function setTypeId($type_id) {
        $type_id = (int) $type_id;
        if ($type_id > 0) {
            $this->_type_id = $type_id;
        }
    }

    public function setCountry($country) {
        if (is_string($country)) {
            $this->_country = $country;
        }
    }

    public function setTva($tva) {
        if (is_string($tva)) {
            $this->_tva = $tva;
        }
    }

    public function setCreated_at($created_at)
{
    $date = DateTime::createFromFormat('Y-m-d H:i:s', $created_at);
    if ($date !== false && $date->format('Y-m-d H:i:s') === $created_at) {
        $this->_created_at = $date->format('d-m-Y'); 
    } else {
        throw new Exception("Invalid datetime format. The expected format is 'Y-m-d H:i:s'.");
    }
}


    public function setUpdate_dat($update_at) {
        // voir le format de date
        $this->_update_at = $update_at;
    }

    // Getters

    public function getType_name() {
        return $this->_type_name;
    }

    
    public function getId() {
        return $this->_id;
    }

    public function getName() {
        return $this->_name;
    }

    public function getTypeId() {
        return $this->_type_id;
    }

    public function getCountry() {
        return $this->_country;
    }

    public function getTva() {
        return $this->_tva;
    }

    public function getCreated_at() {
        return $this->_created_at;
    }

    public function getUpdate_dat() {
        return $this->_update_at;
    }
}

