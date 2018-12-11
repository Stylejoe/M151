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

        $dsn = $dbContent["dsn"];
        $username = $dbContent["username"];
        $password = $dbContent["password"];

        try{
            $conn = new \PDO($dsn, $username, $password);
        }
        catch(PDOException $e){
            echo 'Connection Failed';
        }
        //return new \PDO($dsn, $username, $password, $options);
        return $conn;
    }
}