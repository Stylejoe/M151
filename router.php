<?php

class Router
{
    private static $_instance=null;
    public $router = array();

    public static function getInstance()
    {
        if(Router::$_instance == null)
            Router::$_instance = new Router();
        
        Router::$_instance->fill();
        return Router::$_instance;
    }

    private function __construct(){}
    private function __clone() {}   

    private function fill()
    {
        $files = scandir('src/classes/controller');
        foreach($files as $file) {
            $path_parts = pathinfo($file);
            
            if(strpos($path_parts['basename'], 'Controller') == true)
            {
                $key = '/'.strtolower(str_replace('Controller', '', $path_parts['filename']));
                $value = 'Controller\\'.$path_parts['filename'];

                $this->router[$key] = $value;
            }        
        }
    }
}
