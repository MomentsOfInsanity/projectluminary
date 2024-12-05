<?php

namespace App\Controllers;

use App\Models\Milestone_model;

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

    public function sixthanniversary()
    {
        $this->Milestone_model = new Milestone_model();
        $timeline = $this->Milestone_model->getAllMilestones();
        $this->templatevanniversary('personal/anniversary6', array('milestones' => $timeline));

    }


}
