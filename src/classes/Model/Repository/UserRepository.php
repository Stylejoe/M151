<?php 
namespace Repo;
class UserRepository extends Repository{

    private static $_instance;

    public static function getInstance(){
        if(UserRepository::$_instance == NULL)
            UserRepository::$_instance = new UserRepository();
        
            UserRepository::$_instance->tableName = "user";
        return UserRepository::$_instance;
    }

    public function SelectAll(){
        $sql = "Select * From User";
    }
    public function SelectById($Id){

    }
    public function Insert($entity){

    } 
    public function Delete($entity){

    }
    public function Update($entity){

    }

}