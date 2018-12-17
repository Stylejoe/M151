<?php
namespace Controller;

use View\LoginView;
use App\TemplateEngine;
use Repo\UserRepository;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->view = new LoginView();
    }

    public function TryLogin()
    {
        $username = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : "";
        $pw = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : "";

        $params = array(
            'username' => $username,
            'password' => $pw 
        );
        UserRepository::getInstance()->Select($params);
        
    }

    public function Register()
    {
        $username = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : "";
        $pw = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : "";

        
    }

}