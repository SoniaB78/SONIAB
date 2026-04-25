<?php

use App\Core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');// utilise la méthode GET URL et appelle la méthode index du HomeController

return $router;