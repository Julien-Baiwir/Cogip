<?php

class Types {

    private $_id;
    private $_name;
    private $_created_at;
    private $_update_at;
   
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

    public function setCreated_at($created_at) {
        $date = DateTime::createFromFormat('Y-m-d H:i:s', $created_at);
        if ($date !== false && $date->format('Y-m-d H:i:s') === $created_at) {
            $this->_created_at = $date->format('d-m-Y'); 
        } else {
            throw new Exception("Invalid datetime format. The expected format is 'Y-m-d H:i:s'.");
        }
    }

    public function setUpdate_at($update_at) {
        // voir le format de date
        $this->_update_at = $update_at;
    }

    // Getters
    public function getId() {
        return $this->_id;
    }

    public function getName() {
        return $this->_name;
    }

    public function getCreated_at() {
        return $this->_created_at;
    }

    public function getUpdate_at() {
        return $this->_update_at;
    }
}
