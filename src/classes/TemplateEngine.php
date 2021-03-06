<?php
namespace App;

class TemplateEngine
{
    private static $_instance = null;
    public $smarty = null;

    private function __construct()
    {
        $this->smarty = new \Smarty();
        $this->setDirs();
    }

    private function setDirs()
    {
        $this->smarty->setTemplateDir(dirname(__FILE__).'/View/templates/');
        $this->smarty->addTemplateDir(dirname(__FILE__).'/View/templates/includes');
        $this->smarty->setCompileDir(dirname(__FILE__).'/../smartyCompile/');
        $this->smarty->setConfigDir(dirname(__FILE__).'/../configs/');
        $this->smarty->setCacheDir(dirname(__FILE__).'/../cache/');
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