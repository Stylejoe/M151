<?php
namespace Controller;
use View\LoginView;
use App\TemplateEngine;
class LoginController extends Controller
{
    public function __construct()
    {
        $view = new LoginView();
        echo 'LoginController instanziert';
        $engine = TemplateEngine::getInstance();
        $engine->smarty->display('login.html');
    }

}