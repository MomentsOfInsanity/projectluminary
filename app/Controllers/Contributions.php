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
        $cache = \Config\Services::cache();

        // Check if data is cached
        $cachedData = $cache->get('github_contributions');
        if ($cachedData) {
            return $this->response->setJSON($cachedData);
        }

        $username = 'MomentsOfInsanity';

        $query = <<<GRAPHQL
        {
            rateLimit {
                limit
                cost
                remaining
                resetAt
            }
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

        try {
            $response = $client->post('https://api.github.com/graphql', [
                'headers' => [
                    'Authorization' => "Bearer {$this->githubToken}",
                    'Content-Type'  => 'application/json',
                ],
                'json' => ['query' => $query],
            ]);

            $responseData = json_decode($response->getBody(), true);

            // Check if the rate limit is exceeded
            if (isset($responseData['data']['rateLimit'])) {
                $remaining = $responseData['data']['rateLimit']['remaining'];
                $resetAt = $responseData['data']['rateLimit']['resetAt'];

                if ($remaining === 0) {
                    return $this->response->setStatusCode(429, "Rate limit exceeded. Try again after: $resetAt");
                }
            }

            // Cache the response data for 1 hour
            $cache->save('github_contributions', $responseData, 3600);

            return $this->response->setJSON($responseData);
        } catch (\Exception $e) {
            log_message('error', $e->getMessage());
            return $this->response->setStatusCode(500, $e->getMessage());
        }
    }
}
