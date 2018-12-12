<?php
namespace App;

class Application{
    
    private static $conn = null;
    public static function getConn()
    {
        if(Application::$conn == null)
            Application::$conn = Application::_inizializeDataBase();

        return Application::$conn;
    }

    private static function _inizializeDataBase()
    {
        //read and the decode the json file with the db informations
        $file = file_get_contents('C:\\xampp\\DBConn\\dbconn.json');
        $dbContent = json_decode($file,true);

        $host = $dbContent["host"];
        $username = $dbContent["username"];
        $password = $dbContent["password"];
        $dbname = $dbContent['dbname'];

        try{
            $conn = new \PDO($host, $username, $password);
        }
        catch(PDOException $e)
        {
            echo 'Connection Failed';
        }

        $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
        $conn->query("use $dbname");
        
        return $conn;
    }
}