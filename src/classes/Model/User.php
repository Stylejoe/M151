<?php
namespace Model;
use Repo\UploadRepository;

class User{

    public $id;
    public $userName;
    public $password;
    public $email;
    public $created_at;

    public function __construct($userName, $password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

    public function getMedia($id = null)
    {
        $repo = UploadRepository::getInstance();
        $allUploads = $repo->GetUserUploads($this->id);

        if($id)
            return $allUploads[$id];
        else 
            return $allUploads;
    }
}