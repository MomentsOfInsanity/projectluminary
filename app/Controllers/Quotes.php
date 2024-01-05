<?php

namespace App\Controllers;

class Quotes extends BaseController
{

    public function qotw(){
        $this->template('personal/qotw');
    }

    public function dad($book = null){

        if($book == null){

            $this->template('personal/quotes/dadMain');

        }elseif($book == '1'){

            $this->template('personal/quotes/dad1');

        }elseif($book == '2'){

            $this->template('personal/quotes/dad2');

        }

    }
}