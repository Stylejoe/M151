<?php
namespace Model;

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

}