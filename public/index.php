<?php

/*require_once "../app/core/Router.php";
require_once "../app/core/Controller.php";
require_once "../app/controllers/HomeController.php";
require_once "../app/models/EntityRepository.php";
require_once "../app/models/ParcoursRepository.php";*/
// Autoload simple basé sur le namespace App\
spl_autoload_register(function ($class) {

    // Vérifie que la classe commence bien par App\
    if (strpos($class, 'App\\') === 0) {

        // Enlève "App\"
        $class = str_replace('App\\', '', $class);

        // Remplace les \ par /
        $class = str_replace('\\', '/', $class);

        // Construit le chemin
        $file = "../app/" . $class . ".php";

        // Charge le fichier si existant
        if (file_exists($file)) {
            require_once $file;
        } else {
            die("Autoload error: $file not found");
        }
    }
});

use App\Core\Router;

$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestMethod = $_SERVER['REQUEST_METHOD'];

// Nettoyer le base path
$basePath = '/SONIAB/public';
$requestUri = str_replace($basePath, '', $requestUri);

$router = require "../config/routes.php";

$router->dispatch($requestUri, $requestMethod);