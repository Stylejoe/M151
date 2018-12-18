<?php
namespace Controller;

use View\LoginView;
use App\TemplateEngine;
use Repo\UserRepository;
use Model\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->view = new LoginView();
        $this->repository = UserRepository::getInstance();
    }

    public function TryLogin()
    {
        $username; $password;
        $username = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : null;
        $password = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : null;

        $row = $this->repository->GetHashByLogin($username);

        if( $row && password_verify($password, $row['password_hash']))
            header('Location: /home');
        else{
            $this->view->SetContent(array(
                'message' => "Login Failed! Wrong username or password."
            ));
            $this->view->DisplayPage();   
        }             
    }

    public function Register()
    {
        $username = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : null;
        $pw = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : null;

        //Validate the username and password
        if($this->LoginDataIsValid($username,$pw)){

            $user = new User($username, password_hash($pw, PASSWORD_DEFAULT));
            if($this->repository->Insert($user))
            {
                $this->view->SetContent(array(
                    'message' => "Registration Successful"
                ));
            }               
        }
        else {
            $this->view->DisplayPage();
        }   
    }

    private function LoginDataIsValid($username, $password)
    {
        $message = null;
        if(empty($username) || empty($password))
            $message .= "One or more of the required input fields are empty! <br> ";          

        //Atleast 8 characters with a special and an uppercase character
        if ( strlen($password) < 8 ||
            !preg_match('/[A-Z]/',$password) ||
            !preg_match('/[\W]/', $password)
        )
            $message .= "Your Password doesn't match our Security Guidelines! <br>";

        //if the sql select returns true, there has to be a user with the same loginname
        if($this->repository->GetHashByLogin($username))
            $message .= "The username ".$username." is already taken <br>";

        if($message)
        {
            $this->view->SetContent(array(
                'message' => $message
            ));
            return false;
        }
        return true;
    }
}