<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

$page = $_GET['page'] ?? null;

// controller 
require 'Controller/HomepageController.php';

switch ($page) {
    case 'home':
    default:
        (new HomepageController())->index();
        break;
}