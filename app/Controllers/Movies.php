<?php

namespace App\Controllers;

class Movies extends BaseController
{
    

    public function test()
    {
        // return view('/templates/personal/home');
        $this->template('personal/movietesting');
    }


}
