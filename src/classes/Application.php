<?php
include '..\\..\\DBConn\\dbconn.php';

class Application{

    private static $conn = null;

    public static function getConn()
    {
        if(Application::$conn == null)
            Application::$conn = new \PDO($dsn, $username, $password, $options);

        return Application::$conn;
    }
}