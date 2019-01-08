<?php 
namespace Repo;
use Model\Upload;

class UploadRepository extends Repository{
    private static $_instance=null;

    protected function __construct()
    {
        parent::__construct('upload');
    }

    public static function getInstance()
    {
        if(static::$_instance == null)
            static::$_instance = new UploadRepository();
        return static::$_instance;
    }

    public function Insert($entity){
        
        $userId = $entity->userId;
        $srcPath = $entity->srcPath;
        $title = $entity->title;
        $description = $entity->description;

        $sql = $this->conn->prepare(
            'INSERT INTO '.$this->tableName.' (userId, srcPath, title, description) 
            VALUES(:userId, :srcPath, :title, :description)'
        );
        return $sql->execute(array(
            ':userId' => $userId,
            ':srcPath' => $srcPath,
            ':title' => $title,
            ':description' => $description
        ));
    } 

    public function Delete($entity){
        $id = $entity->id;

        $sql = $this->conn->prepare(
            'DELETE FROM '.$this->tableName.' WHERE mediaId = :mediaId'
        );
        return $sql->execute(array(
            ':mediaId' => $id
        ));
    }
    
    public function Update($entity){

    }

    public function GetUserUploads($id)
    {
        $uploads = array();
        $userTable = UserRepository::getInstance()->tableName;
        $sql = $this->conn->prepare(
            'Select * FROM '.$this->tableName.
            ' INNER JOIN '.$userTable.' ON '.
            $this->tableName.'.userId = '.$userTable.'.userId 
            WHERE '.$this->tableName.'.userId = :userId
            ORDER BY '.$this->tableName.'.uploaded_at DESC'
        );
        $sql->execute(array(
            ':userId' => $id
        ));

        //create a list of uploads
        foreach ($sql->fetchAll() as $upload) {
            $item = new Upload(
                $upload['userId'],
                $upload['srcPath'],
                $upload['title'],
                $upload['description']
            );
            $item->id = $upload['mediaId'];
            $uploads[$item->id] = $item;
        }
        return $uploads;
    }

    public function SelectAll()
    {
        $uploads = array();
        $userTable = UserRepository::getInstance()->tableName;
        $sql = $this->conn->prepare(
            'Select * FROM '.$this->tableName.
            ' INNER JOIN '.$userTable.' ON '.
            $this->tableName.'.userId = '.$userTable.'.userId
             ORDER BY '.$this->tableName.'.uploaded_at DESC'
        );
        $sql->execute();
        foreach ($sql->fetchAll() as $upload) {
            $item = new Upload(
                $upload['userId'],
                $upload['srcPath'],
                $upload['title'],
                $upload['description']
            );
            $item->id = $upload['mediaId'];
            $uploads[$item->id] = $item;
        }
        return $uploads;
    }

}