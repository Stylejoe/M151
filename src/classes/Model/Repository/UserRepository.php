<?php 
namespace Repo;
use Model\User;

class UserRepository extends Repository{
    private static $_instance=null;

    protected function __construct()
    {
        parent::__construct('user');
    }

    public static function getInstance()
    {
        if(static::$_instance == null)
            static::$_instance = new UserRepository();
        return static::$_instance;
    }

    public function Insert($entity){
        $username = $entity->userName;
        $password = $entity->password;

        $sql = $this->conn->prepare(
            'INSERT INTO '.$this->tableName.' (username, password_hash) VALUES(:username, :password)'
        );
        return $sql->execute(array(
            ':username' => $username,
            ':password' => $password
        ));
    } 

    public function Delete($entity){
        $id = $entity->id;

        $sql = $this->conn->prepare(
            'DELETE FROM '.$this->tableName.' WHERE userId = :userId'
        );
        return $sql->execute(array(
            ':userId' => $id
        ));
    }
    
    public function Update($entity){

    }

    public function GetUserByName($username){
 
        $sql = $this->conn->prepare(
            'Select * From '.$this->tableName.' Where username = :username'
        );
        $sql->execute(array(
            ':username' => $username
        ));
        if($row = $sql->fetch(\PDO::FETCH_ASSOC))
        {
            $user = new User($row['username'], $row['password_hash']);
            $user->id = $row['userId'];
            $user->email = $row['email'];
            $user->created_at = $row['created_at'];

            return $user;
        }
        else 
            return null;
    }

    public function GetUserById($id)
    {
        $sql = $this->conn->prepare(
            'Select * From '.$this->tableName.' Where userId = :id'
        );
        $sql->execute(array(
            ':id' => $id
        ));
        if($row = $sql->fetch(\PDO::FETCH_ASSOC))
        {
            $user = new User($row['username'], $row['password_hash']);
            $user->id = $row['userId'];
            $user->email = $row['email'];
            $user->created_at = $row['created_at'];

            return $user;
        }
        else 
            return null;
    }

}