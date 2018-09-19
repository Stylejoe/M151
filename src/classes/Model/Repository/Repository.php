<?php
namespace Repo;
abstract class Repository{
    protected $tableName;

    public abstract function SelectAll();
    public abstract function SelectById($Id);
    public abstract function Insert($entity);  
    public abstract function Delete($entity);
    public abstract function Update($entity);
}
