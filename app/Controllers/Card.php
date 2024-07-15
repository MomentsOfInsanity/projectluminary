<?php

namespace App\Controllers;

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

    public function gaming()
    {
        $this->template('/personal/cards/gaming');
    }

}
