<?php

class Companies {

    private $_id;
    private $_name;
    private $_type_id;
    private $_country;
    private $_tva;
    private $_created_at;
    private $_update_dat;

    // Constructor
    public function __construct(array $data) {
        $this->hydrate($data);

        foreach($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    // Setters
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

    public function setCreatedAt($created_at) {
        // voir le format de date
        $this->_created_at = $created_at;
    }

    public function setUpdateDat($update_dat) {
        // voir le format de date
        $this->_update_dat = $update_dat;
    }

    // Getters
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

    public function getCreatedAt() {
        return $this->_created_at;
    }

    public function getUpdateDat() {
        return $this->_update_dat;
    }
}

