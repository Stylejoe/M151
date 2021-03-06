<?php
namespace Controller;

use View\LoginView;
use App\Application;
use App\SessionHandler;
use Repo\UserRepository;
use Model\User;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->view = new LoginView($this);
        $this->repository = UserRepository::getInstance();
    }

    public function TryLogin()
    {
        if( Application::GetLoginCount() >= 3)
        {
            $this->view->SetContent(array(
                'message' => "You have tried too many times.
                 Please try again later"
            ));
            $this->view->DisplayPage();
            return;
        }

        $username; $password;
        $username = isset($_POST['login']) ? htmlspecialchars($_POST['login']) : null;
        $password = isset($_POST['password']) ? $_POST['password'] : null;

        $user = $this->repository->GetUserByName($username);

        //see if the row contains something, if yes compare the hash
        if( $user && password_verify($password, $user->password))
        {
            SessionHandler::Login($user);
            header('Location: /home');
        }         
        else{
            Application::RegisterAttempt();
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
        $this->view->DisplayPage();
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
        if($this->repository->GetUserByName($username))
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