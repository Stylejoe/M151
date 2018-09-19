<?php
include '..\\..\\DBConn\\dbconn.php';

class Application{
    
    private static $conn = null;
    public static function getConn()
    {
        $dbContent = json_decode(file_get_contents('C:\\xampp\\DBConn\\dbconn.json'), true);
        $dsn = $dbContent["dsn"];
        //TODO: DBCONN

        if(Application::$conn == null)
            Application::$conn = new \PDO($dsn, $username, $password, $options);

        return Application::$conn;
    }
}