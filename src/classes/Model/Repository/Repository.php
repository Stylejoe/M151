<?php
namespace Repo;
use App\Application;

abstract class Repository{
    protected $conn;
    protected $tableName;

    protected function __construct($tableName)
    {
        $this->conn = Application::getConn();
        $this->tableName = $tableName;
    }

    public static abstract function getInstance();
    public abstract function Insert($entity);  
    public abstract function Delete($entity);
    public abstract function Update($entity);
}
