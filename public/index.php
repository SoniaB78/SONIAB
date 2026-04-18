<?php

require_once "../app/core/Controller.php";
require_once "../app/controllers/HomeController.php";

use App\Controllers\HomeController;

$controller = new HomeController();
$controller->index();