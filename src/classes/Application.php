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

            $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
            $conn->query("use $dbname");

            $conn->query("CREATE TABLE IF NOT EXISTS user(
                userId INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) NOT NULL,
                password_hash VARCHAR(255) NOT NULL,
                email VARCHAR(255) NOT NULL,
                created_at TIMESTAMP NOT NULL
            )");

            $conn->query("CREATE TABLE IF NOT EXISTS upload(
                mediaId INT AUTO_INCREMENT PRIMARY KEY,
                userId INT NOT NULL,
                srcPath VARCHAR(255) NOT NULL,
                title VARCHAR(50) NOT NULL,
                description VARCHAR(400) DEFAULT '',
                created_at TIMESTAMP NOT NULL
            )");

            $conn->query("CREATE TABLE IF NOT EXISTS comment(
                commentId INT AUTO_INCREMENT PRIMARY KEY,
                mediaId INT NOT NULL,
                content VARCHAR(400) NOT NULL,
                created_at TIMESTAMP NOT NULL    
            )");
        }
        catch(PDOException $e)
        {
            echo 'Connection Failed';
        }
       
        return $conn;
    }
}