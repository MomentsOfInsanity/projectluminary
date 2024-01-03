<?php

namespace App\Controllers;

class Exercise extends BaseController
{
    public function index()
    {
    
        echo "hello";
        
    }


    public function dailyTracker(){
        $this->template('personal/exercise/daily');
    }

}
