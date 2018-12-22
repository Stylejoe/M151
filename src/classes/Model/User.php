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

    public static function CreateWithRow($row)
    {
        $user = new User($row['username'], $row['password_hash']);
        $user->id = $row['userId'];
        $user->email = $row['email'];
        $user->created_at = $row['created_at'];
        return $user;
    }

}