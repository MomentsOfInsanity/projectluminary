<?php

namespace App\Controllers;

use App\Models\User_model;

class Card extends BaseController
{
    public function RY()
    {
        $this->template('/personal/cards/ry_series');
    }

    public function ry_list()
    {

        $this->template('/personal/cards/list/ry_list');
    }

    public function testModel()
    {
        // $this->User_Model = new User_model();
        // $getTest = $this->User_Model->getUsers();
        // var_dump($getTest->test1);
    }



}
