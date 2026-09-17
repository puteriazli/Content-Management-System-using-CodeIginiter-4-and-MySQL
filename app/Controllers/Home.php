<?php

namespace App\Controllers;

# GitHub = https://github.com/puteriazli
# LinkedIn = https://www.linkedin.com/in/puteriazli

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}
