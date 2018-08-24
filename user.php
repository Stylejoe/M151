<?php
//Diese Klasse stellt einen normalen Benutzer dar
class User{

    public $userName;
    public $login;
    public $erstellungsdatum;

    public $profilePic;

    function __construct()
    {
        $this->$erstellungsdatum = date('Y.m.d');
    }
}
?>