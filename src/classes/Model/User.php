<?php
namespace Model;
class User{

    public $userName;
    public $password;
    public $erstellungsDatum;

    public function __construct($userName, $password)
    {
        $this->userName = $userName;
        $this->password = $password;
    }

}