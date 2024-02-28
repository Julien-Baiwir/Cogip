<?php

declare(strict_types=1);

$page = $_GET['page'] ?? null;

// controller 
require 'controllers/HomePageController.php';

switch ($page) {
    case 'home':
    default:
        (new HomepageController())->index();
        break;
}

// define('URL', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
// il faudra activer çà avec urlsview

require_once('controllers/Router.php');

$router = new Router();
$router->routeReq();



