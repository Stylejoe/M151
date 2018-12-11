<?php

class Router
{
    public static $Routes = array();

    private function __construct(){}
    private function __clone() {}   

    public static function addRoute($url, $controllerClass, $method = '')
    {
        static::$Routes[] = array( 'Url' => $url, 'Controller' => $controllerClass, 'Method' => $method);
    }
}
