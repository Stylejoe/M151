<?php

# Includes
require_once(__DIR__.'/vendor/autoload.php');
require_once('router.php');

# extract informations from url
$path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '/';
// echo "requested route: {$path_info}\n";
// echo "requested params: ".print_r($_REQUEST,true)."\n";

// if ($conn) {
//     echo "Erfolg! Datenbankverbindung hergestellt";
// }    

//Add all possible routes to the Router
Router::addRoute('/', Controller\LoginController::class);
Router::addRoute('/login', Controller\LoginController::class, 'try_login');

if(array_key_exists($path_info ,Router::$Routes))
            $controller = new Router::$Routes[$path_info]['Controller']();
        else
        {
            $content = array(
                'url' => $path_info
            );
            $te = App\TemplateEngine::getInstance();
            $te->smarty->assign($content);
            $te->smarty->display('pageNotFound.html');
        }