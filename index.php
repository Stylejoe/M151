<?php

# Includes
require_once(__DIR__.'/vendor/autoload.php');
require_once('router.php');

# extract informations from url
$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
// echo "requested route: {$path_info}\n";
// echo "requested params: ".print_r($_REQUEST,true)."\n";

App\Application::getConn();

//Add all possible routes to the Router
Router::addRoute('/', Controller\LoginController::class);
Router::addRoute('/login', Controller\LoginController::class, 'TryLogin');
Router::addRoute('/register', Controller\LoginController::class, 'Register');

Router::TryRoute($path_info);