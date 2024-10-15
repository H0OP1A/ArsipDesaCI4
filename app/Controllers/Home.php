<?php

namespace App\Controllers;
use Myth\Auth\Config\Auth as AuthConfig;

class Home extends BaseController
{
    public function index(): string
    {

        return view('profile');
    }
}
