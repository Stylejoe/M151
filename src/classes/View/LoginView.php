<?php

namespace View;

class LoginView extends View
{
    public function __construct($controller)
    {
        parent::__construct($controller);
        $this->html = 'login.html';
        $this->needsLogin = false;
    }
}