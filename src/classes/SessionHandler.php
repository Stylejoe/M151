<?php
namespace App;
use Model\User;

abstract class SessionHandler{

    private static function Refresh()
    {
        if(!isset($_SESSION))
            session_start();

        session_regenerate_id(true);
    }
    public static function Login(User $user)
    {
        static::Refresh();
        $_SESSION['userId'] = $user->id;
    }

    public static function Logout()
    {
        static::Refresh();
        session_unset();
        session_destroy();
    }

    public static function isLoggedIn()
    {
        static::Refresh();
        return (isset($_SESSION['userId']) && !empty($_SESSION['userId']));
    }

    public static function Get($name)
    {
        static::Refresh();
        if(isset($_SESSION[$name]))
            return $_SESSION[$name];
        else
            return null;
    }
    
    private function __construct()
    {}
}