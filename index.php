<?php
putenv("WEBROOT=".__DIR__);

# Includes
require_once(__DIR__.'/vendor/autoload.php');
require_once('router.php');
App\Application::getConn();

# extract informations from url
$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';

//Add all possible routes to the Router
Router::addRoute('/', Controller\LoginController::class);
Router::addRoute('/login', Controller\LoginController::class, 'TryLogin');
Router::addRoute('/register', Controller\LoginController::class, 'Register');
Router::addRoute('/home', Controller\HomeController::class);
Router::addRoute('/home/Uploads', Controller\HomeController::class, 'YourUploads');
Router::addRoute('/home/Upload', Controller\HomeController::class, 'Upload');
Router::addRoute('/Upload', Controller\HomeController::class, 'Upload');

Router::TryRoute($path_info);