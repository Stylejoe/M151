<?php
use App\SessionHandler;
class Router
{
    public static $Routes = array();

    private function __construct()
    {}
    private function __clone()
    {}

    public static function addRoute($url, $controllerClass, $method = '')
    {
        static::$Routes[$url] = array('Controller' => $controllerClass, 'Method' => $method);
    }

    public static function TryRoute($path)
    {
        if (array_key_exists($path, static::$Routes)) 
        {
            $controller = new static::$Routes[$path]['Controller']();
            $method = static::$Routes[$path]['Method'];

            //check if the view needs a login and if the session is already running
            if($controller->view->needsLogin && !SessionHandler::isLoggedIn())
            {
                header('Location: /');
                return;
            }

            //call method if available, otherwise show page
            if ($method) 
                $controller->$method();
            else 
                $controller->view->DisplayPage();
        } 
        else 
        {
            //route does not exist, show error page
            $content = array(
                'url' => $path,
            );
            $te = App\TemplateEngine::getInstance();
            $te->smarty->assign($content);
            $te->smarty->display('pageNotFound.html');
        }
    }
}
