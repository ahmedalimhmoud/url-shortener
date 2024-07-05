<?php

declare(strict_types=1);

namespace App\Services;

use GuzzleHttp\Client;

class GoogleService
{
    /**
     * Get Shorten Url by Url
     *
     * @param string $url
     * @return bool
     */
    public function validateUrl(string $url): bool
    {
        $client = new Client();
        $response = $client->post('https://safebrowsing.googleapis.com/v4/threatMatches:find?key=' . env('GOOGLE_API_KEY'), [
            'json' => [
                'client' => [
                    'clientId' => 'yourcompany',
                    'clientVersion' => '1.5.2'
                ],
                'threatInfo' => [
                    'threatTypes' => ['MALWARE', 'SOCIAL_ENGINEERING'],
                    'platformTypes' => ['WINDOWS'],
                    'threatEntryTypes' => ['URL'],
                    'threatEntries' => [
                        ['url' => $url]
                    ]
                ]
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);

        return empty($result['matches']);
    }
}
