<?php 

session_start();

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "../app/core/init.php";

//DEBUG is set in core/config.php
DEBUG ? ini_set('display_errors', 1) : ini_set('display_errors', 0);

$app = new App;
$app->loadController();

/* will use this next version
$router = new Router();
$router->addRoute('/', 'HomeController@index');
$router->addRoute('/dashboard', 'DashboardController@index');
$router->resolve();
*/