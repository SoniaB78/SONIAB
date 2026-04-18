<?php

require_once "../app/core/Router.php";
require_once "../app/core/Controller.php";
require_once "../app/controllers/HomeController.php";

use App\Core\Router;

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Nettoyer le base path
$basePath = '/SONIAB/public';
$requestUri = str_replace($basePath, '', $requestUri);

$router = require "../config/routes.php";

$router->dispatch($requestUri, $requestMethod);