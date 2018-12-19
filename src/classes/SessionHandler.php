<?php
namespace App;
use Model\User;

class SessionHandler{

    public static $user;

    public static function StartSession(User $user)
    {
        session_start();
        static::$user = $user;
    }

    public static function sessionIsRunning()
    {
        return isset($_SESSION);
    }

    public static function EndSession()
    {
        session_destroy();
    }
    
    private function __construct()
    {}
}