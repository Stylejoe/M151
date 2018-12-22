<?php
namespace App;
use Model\User;

class SessionHandler{

    private static function Refresh()
    {
        session_start();
        session_regenerate_id(true);
    }
    public static function Login(User $user)
    {
        static::Refresh();
        $_SESSION['userId'] = $user->id;
    }

    public static function Destroy()
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
    
    private function __construct()
    {}
}