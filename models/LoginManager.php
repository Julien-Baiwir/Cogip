<?php

class LoginManager {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function validateInput($data) {
        return !empty($data);
    }
    
    public function isValid($email, $password) {
        if($this->validateInput($email) && $this->validateInput($password)) {

            $sql = "SELECT * FROM users WHERE email = :email";
            $stmt = $this->pdo->prepare($sql);
            
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch();

            return $user && password_verify($password, $user['password']);
        }
        else {
            return false;
        }
    }
}

?>