<?php

namespace View;

class HomeView extends View
{
    public function __construct()
    {
        parent::__construct();
        $this->html = 'home.html';
        $this->needsLogin = true;
    }
}