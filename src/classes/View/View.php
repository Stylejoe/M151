<?php
namespace View;
use App\TemplateEngine;

abstract class View{

    private $smarty;
    protected $html;
    public $needsLogin;
    public $controller;

    public function __construct($controller)
    {
        $this->smarty = TemplateEngine::getInstance()->smarty;
        $this->controller = $controller;
    }

    public function SetContent($content)
    {
        $this->smarty->assign($content);
    }

    public function DisplayPage()
    {
        $this->smarty->display($this->html);
    }

}