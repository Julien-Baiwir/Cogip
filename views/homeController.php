<?php
declare(strict_types = 1);

class HomepageController
{
    public function index()
    {
        // Load the view
        require 'views/home.php';
    }
}