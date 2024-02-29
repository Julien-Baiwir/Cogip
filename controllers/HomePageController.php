<?php
declare(strict_types = 1);

class HomepageController
{
    public function index()
    {
        // Welcome message 
        $isLoggedIn = UserModel::isLoggedIn();
        require 'views/includes/welcomeMessage.php';

        // Load page
        require 'views/home.php';
    }
}