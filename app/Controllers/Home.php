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
        // return view('/templates/personal/home');
        $this->template('personal/home');
    }

    public function valentineHome()
    {
        // return view('/templates/personal/home');
        $this->templatevalentine('personal/valentinehome');
    }

    public function interational_girlfriend_day_2024()
    {
        // return view('/templates/personal/home');
        $this->templatevalentine('personal/internationalgf24');
    }


}
