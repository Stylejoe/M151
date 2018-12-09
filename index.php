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
$router = Router::getInstance();
$conn = Connection\Application::getConn();
$user = new Model\User("Test","pw");

if ($conn) {
    echo "Erfolg! Datenbankverbindung hergestellt";
}    

if(array_key_exists(strtolower($path_info), $router->router))
    $controller = new $router->router[$path_info]();
else
    echo "Key konnte ".$path_info." nicht gefunden werden";
