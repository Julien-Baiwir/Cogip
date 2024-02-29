<?php

class UserModel 
{
    public static function isLoggedIn() {
        session_start();
        return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    }

    public static function getUsername() {
        session_start();
        return isset($_SESSION['username']) && $_SESSION['username'] : '';
    }
}
?>