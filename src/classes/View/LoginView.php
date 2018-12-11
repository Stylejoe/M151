<?php

namespace View;

class LoginView extends View
{
    public function __construct()
    {
        parent::__construct();
        $this->html = 'login.html';
    }
}