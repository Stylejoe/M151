<?php

namespace Model;
use Repo\CommentRepository;

class Upload{
    
    public $id;
    public $userId;
    public $srcPath;
    public $title;
    public $description;
    public $created_at;

    public function __construct(
        $userId, $srcPath, $title, $description
    )
    {
        $this->userId = $userId;
        $this->srcPath = $srcPath;
        $this->title = $title;
        $this->description = $description;
    }

    public function getComments($id = null)
    {
        $repo = CommentRepository::getInstance();
        $allComments = $repo->GetCommentsFromMedia($this->id);
        
        if($id)
            return $allComments[$id];
        else 
            return $allComments;
    }
}