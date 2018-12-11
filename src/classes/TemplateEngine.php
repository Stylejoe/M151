<?php
namespace App;
use Smarty;

class TemplateEngine
{
    private static $_instance = null;
    private $smarty = null;

    private function __construct()
    {
        $this->smarty = new \Smarty();
        $this->loadConfig();
    }

    private function loadConfig()
    {
        $this->smarty->setTemplateDir(dirname(__FILE__).'templates/');
        $this->smarty->setCompileDir(dirname(__FILE__).'smartyCompile/');
        $this->smarty->setConfigDir(dirname(__FILE__).'configs/');
        $this->smarty->setCacheDir(dirname(__FILE__).'cache/');
    }

    public static function getInstance()
    {
        if(static::$_instance == null)
        {
            static::$_instance = new TemplateEngine();
        }
        return static::$_instance;
    }
}