<?php

namespace App\Controllers;

use CodeIgniter\HTTP\Client;

class Contributions extends BaseController
{
    private $githubToken = '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';

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
                'Authorization' => "Bearer {$this->githubToken}",
                'Content-Type'  => 'application/json',
            ],
            'json' => ['query' => $query],
        ]);

        return $this->response->setJSON(json_decode($response->getBody(), true));
    }
}
