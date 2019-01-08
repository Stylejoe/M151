<?php
namespace App;

class Application
{

    private static $conn = null;
    public static function getConn()
    {
        if (Application::$conn == null) {
            Application::$conn = Application::_inizializeDataBase();
        }

        return Application::$conn;
    }

    private static function _inizializeDataBase()
    {
        //read and the decode the json file with the db informations
        $file = file_get_contents('C:\\xampp\\DBConn\\dbconn.json');
        $dbContent = json_decode($file, true);

        $host = $dbContent["host"];
        $username = $dbContent["username"];
        $password = $dbContent["password"];
        $dbname = $dbContent['dbname'];

        try {
            $conn = new \PDO($host, $username, $password);

            //Create the whole database structure, if it's not available
            $conn->query("CREATE DATABASE IF NOT EXISTS $dbname");
            $conn->query("use $dbname");

            $conn->query("CREATE TABLE IF NOT EXISTS user(
                userId INT AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(255) NOT NULL,
                password_hash VARCHAR(255) NOT NULL,
                email VARCHAR(255) DEFAULT '',
                created_at TIMESTAMP NOT NULL
            )");

            $conn->query("CREATE TABLE IF NOT EXISTS upload(
                mediaId INT AUTO_INCREMENT PRIMARY KEY,
                userId INT NOT NULL,
                srcPath VARCHAR(255) NOT NULL,
                title VARCHAR(50) NOT NULL,
                description VARCHAR(400) DEFAULT '',
                uploaded_at TIMESTAMP NOT NULL
            )");

            $conn->query("CREATE TABLE IF NOT EXISTS comment(
                commentId INT AUTO_INCREMENT PRIMARY KEY,
                mediaId INT NOT NULL,
                content VARCHAR(400) NOT NULL,
                written_at TIMESTAMP NOT NULL
            )");

            $conn->query("CREATE TABLE IF NOT EXISTS logintable(
                loginId int AUTO_INCREMENT PRIMARY KEY,
                ip VARCHAR(20) NOT NULL,
                loginTime TIMESTAMP NOT NULL
            )");

        } catch (PDOException $e) {
            echo 'Connection Failed';
        }

        return $conn;
    }

    public static function RegisterAttempt()
    {
        //writes the ip adress into the logintable
        $ip = $_SERVER["REMOTE_ADDR"];
        $sql = static::$conn->prepare(
            "INSERT INTO logintable (ip) VALUES (:ip)"
        );
        $sql->execute(array(
            ':ip' => $ip
        ));
    }

    public static function GetLoginCount()
    {
        /*returns the count of the rows with 
        fitting ip adress from the last 10 minutes*/
        $ip = $_SERVER["REMOTE_ADDR"];
        $sql = static::$conn->prepare(
            "SELECT * FROM logintable 
            WHERE ip LIKE :ip AND loginTime > (now() - interval 10 minute)"
        );
        $sql->execute(array(
            ':ip' => $ip
        ));
        return count($sql->fetchAll());
    }
}
