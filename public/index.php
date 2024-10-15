<?php
// public/index.php
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'cliente';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

require_once __DIR__ . '/../controllers/' . ucfirst($controller) . 'Controller.php';

$controllerName = ucfirst($controller) . 'Controller';
$controllerObj = new $controllerName();
$controllerObj->$action();
