<?php 
namespace Repo;
use Model\Comment;

class CommentRepository extends Repository{
    private static $_instance=null;

    protected function __construct()
    {
        parent::__construct('comment');
    }

    public static function getInstance()
    {
        if(static::$_instance == null)
            static::$_instance = new CommentRepository();
        return static::$_instance;
    }

    public function Insert($entity){
        
        $mediaId = $entity->mediaId;
        $content = $entity->content;

        $sql = $this->conn->prepare(
            'INSERT INTO '.$this->tableName.' (mediaId, content) 
            VALUES(:mediaId, :content)'
        );
        return $sql->execute(array(
            ':mediaId' => $mediaId,
            ':content' => $content,
        ));
    } 

    public function Delete($entity){
        $id = $entity->id;

        $sql = $this->conn->prepare(
            'DELETE FROM '.$this->tableName.' WHERE commentId = :commentId'
        );
        return $sql->execute(array(
            ':commentId' => $id
        ));
    }
    
    public function Update($entity){

    }

    public function GetCommentsFromMedia($id)
    {
        $sql = $this->conn->prepare(
            'Select * FROM '.$this->tableName.
            ' WHERE mediaId = :mediaId ORDER BY written_at DESC'
        );
        $sql->execute(array(
            ':mediaId' => $id
        ));

        $comments = array();
        foreach ($sql->fetchAll() as $comment) {
            $item = new Comment(
                $comment['mediaId'],
                $comment['content']
            );
            $item->id = $comment['commentId'];
            $comments[] = $item;
        }
        return $comments;
    }

}