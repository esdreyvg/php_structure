<?php
require_once '../vendor/autoload.php';
require_once '../config/config.php';

use App\Controller\HomeController;

$controller = new HomeController();
$controller->index();