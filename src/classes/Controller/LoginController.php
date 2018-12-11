<?php
namespace Controller;

use View\LoginView;
use App\TemplateEngine;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->view = new LoginView();
    }

    public function TryLogin()
    {
        $username = isset($_POST['login']) ? $_POST['login'] : "";
        $pw = isset($_POST['password']) ? $_POST['password'] : "";

        
    }

}