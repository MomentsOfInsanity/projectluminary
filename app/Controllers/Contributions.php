<?php

namespace App\Controllers;

class Contributions extends BaseController
{
    public function index()
    {
        return view('contributions'); // Load the frontend view
    }

    public function fetch()
    {
        // Load the JSON file
        // $filePath = WRITEPATH . 'data/contributions.json';
        // if (!file_exists($filePath)) {
        //     return $this->response->setStatusCode(404, 'Contributions data not found.');
        // }

        // $jsonData = file_get_contents($filePath);
        // return $this->response->setJSON(json_decode($jsonData, true));

        echo WRITEPATH . 'data/contributions.json';

    }
}
