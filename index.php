<?php

// define('URL', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
// il faudra activer çà avec urlsview

require_once('views/home.php');

require_once('controllers/Router.php');
// Inclure le contenu de home.php

$router = new Router();

$router->routeReq();



