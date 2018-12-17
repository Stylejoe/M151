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
        $this->repository = UserRepository::getInstance();
    }

    public function TryLogin()
    {
        $username = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : "";
        $pw = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : "";

        $params = array(
            'username' => $username,
            'password' => $pw
        );
        $this->repository->Select($params);
        
    }

    public function Register()
    {
        $username = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : "";
        $pw = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : "";

        $this->LoginDataIsValid($username,$pw);
        $this->view->DisplayPage();
    }

    private function LoginDataIsValid($username, $password)
    {
        
        //Atleast 8 characters with a special and an uppercase character
        if ( strlen($password) < 8 ||
            !preg_match('/[A-Z]/',$password) ||
            !preg_match('/[\W]/', $password)
        )
        {
            $this->view->SetContent(array(
                'message' => "The Password doesn't match our Security Guidelines"
            ));
            return false;
        }
    }

    private function LoginDataIsValid($username, $password)
    {
        if ( strlen($password) < 8 ||
            !preg_match('/[A-Z]/',$password) ||
            !preg_match('/[\W]/', $password)
        )
        {
            $this->view->SetContent(array(
                'message' => "The Password doesn't match our Security Guidelines"
            ));
            return false;
        }
    }

}