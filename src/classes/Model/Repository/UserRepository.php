<?php 
namespace Repo;
class UserRepository extends Repository{

    public function __construct()
    {
        parent::__construct();
        $tableName = 'user';
    }


    public static function SelectAll(){
        $sql = "Select * From User";
    }
    public static function Select($params){
        $username = $params['username'];
        $password = $params['password'];

        $sql = $conn->prepare(
            'Select * From '.$tableName.' Where login = :login AND passwort = :password'
        );

        $sql->execute(array(
            ':login' => $username,
            ':password' => $password
        )
        );
        
        
    }
    public static function Insert($entity){

    } 
    public static function Delete($entity){

    }
    public static function Update($entity){

    }

}