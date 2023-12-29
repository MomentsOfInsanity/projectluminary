<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
    
        return view('/templates/sign-in');
        
    }

    public function mainHome()
    {
        return view('/templates/personal/home');
    }

    public function renderTest()
    {
        return view('/templates/personal/test');
    }
}
