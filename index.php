<?php

# lade composer autoloader:
require_once(__DIR__.'/vendor/autoload.php');

# setze Output-Type auf Plaintext, für debugging-Ausgabe:
header('Content-Type: text/html');

# extrahiere URL-Route:
$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
echo "requested route: {$path_info}\n";
echo "requested params: ".print_r($_REQUEST,true)."\n";

include('router.php');

$conn = App\Application::getConn();
$user = new Model\User("Test","pw");
//$te = App\TemplateEngine::getInstance();

if ($conn) {
    echo "Erfolg! Datenbankverbindung hergestellt";
}    

Router::addRoute('/', Controller\LoginController::class);
Router::addRoute('/login', Controller\LoginController::class);

$ctrl = Router::$Routes[0];

$controller = new $ctrl['Controller']();

// if(array_key_exists(strtolower($path_info), $router->router))
//     $controller = new $router->router[$path_info]();
// else
//     echo "Key konnte ".$path_info." nicht gefunden werden";
