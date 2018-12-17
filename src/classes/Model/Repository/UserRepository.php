<?php 
namespace Repo;
use Model\User;
class UserRepository extends Repository{
    private static $_instance=null;

    private function __construct()
    {
        parent::__construct('user');
    }

    public static function getInstance()
    {
        if(static::$_instance == null)
            static::$_instance = new UserRepository();
        return static::$_instance;
    }

    public function SelectAll(){
        $sql = "Select * From User";
    }
    public function Select($params){
        $username = $params['username'];
        $password = $params['password'];
 
        $sql = $this->conn->prepare(
            'Select * From '.$this->tableName.' Where username = :username AND password_hash = :password'
        );
        $sql->execute(array(
            ':username' => $username,
            ':password' => $password
        ));
        
        
        
    }
    public function Insert(User $entity){
        $username = $entity->userName;
        $password = $entity->password;

        $sql = $this->conn->prepare(
            'INSERT INTO '.$this->tableName.' username, password_hash VALUES(:username, :password)'
        );
        $sql->execute(array(
            ':username' => $username,
            ':password' => $password
        ));
    } 
    public function Delete($entity){

    }
    public function Update($entity){

    }

}