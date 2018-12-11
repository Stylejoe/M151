<?php
namespace Controller;
use View\LoginView;

class LoginController extends Controller
{
    public function __construct()
    {
        $view = new LoginView();
        echo 'LoginController instanziert';
    }

}