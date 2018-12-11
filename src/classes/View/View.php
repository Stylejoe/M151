<?php
namespace View;
use App\TemplateEngine;

abstract class View{

    private $smarty;

    public function __construct()
    {
        $this->smarty = TemplateEngine::getInstance()->smarty;
    }

    public function SetContent($content)
    {
        $this->smarty->assign($content);
    }

    public function DisplayPage($html)
    {
        $this->smarty->display($html);
    }

}