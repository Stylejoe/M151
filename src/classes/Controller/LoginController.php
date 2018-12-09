<?php
namespace Controller;

class LoginController extends Controller
{
    public function __construct()
    {
        $view = new View\LoginView();
        echo 'LoginController instanziert';
    }

}