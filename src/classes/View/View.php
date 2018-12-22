<?php
namespace View;
use App\TemplateEngine;

abstract class View{

    private $smarty;
    protected $html;
    public $needsLogin;

    public function __construct()
    {
        $this->smarty = TemplateEngine::getInstance()->smarty;
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