<?php
namespace Repo;
use App\Application;

abstract class Repository{
    protected $conn;
    protected $tableName;

    public function __construct()
    {
        $conn = App\Application::getConn();
    }

    public static abstract function SelectAll();
    public static abstract function Select($params);
    public static abstract function Insert($entity);  
    public static abstract function Delete($entity);
    public static abstract function Update($entity);
}
