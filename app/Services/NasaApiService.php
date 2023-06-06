<?php

namespace App\Services;


use GuzzleHttp\Client;

class NasaApiService
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function getCuriosityMarsPhoto()
    {
        $apiKey = env('NASA_API_KEY');

        $response = $this->client->request('GET', 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/latest_photos', [
            'query' => [
                'api_key' => $apiKey,
                'camera' => 'NAVCAM'
            ],
        ]);
        return json_decode($response->getBody(), true);
    }
}
