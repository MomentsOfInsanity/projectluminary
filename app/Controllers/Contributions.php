<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Client;

class Contributions extends BaseController
{

    public function index()
    {
        return view('contributions'); // Load the frontend view
    }

    public function fetch()
    {
        $username = 'MomentsOfInsanity'; // Replace with your GitHub username

        $query = <<<GRAPHQL
        {
            user(login: "$username") {
                contributionsCollection {
                    contributionCalendar {
                        weeks {
                            contributionDays {
                                date
                                contributionCount
                            }
                        }
                    }
                }
            }
        }
        GRAPHQL;

        $client = \Config\Services::curlrequest();

        $response = $client->post('https://api.github.com/graphql', [
            'headers' => [
                'Authorization' => "Bearer {$this->getenv('PAT')}",
                'Content-Type'  => 'application/json',
            ],
            'json' => ['query' => $query],
        ]);

        return $this->response->setJSON(json_decode($response->getBody(), true));
    }
}
