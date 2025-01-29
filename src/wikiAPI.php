<?php

namespace Api;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class wikiAPI
{
    private $baseUrl;
    private $client;

    public function __construct(string $baseUrl = "https://open.wiki-api.ir")
    {
        if (version_compare(PHP_VERSION, '7.4.3', '<')) {
            die("Error: This project requires PHP 7.4.3 or higher.\n");
        }
        
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->client = new Client();
    }

    public function request(string $endpoint, array $params = []): array
    {
        $endpoint = trim($endpoint, '/');

        $url = "{$this->baseUrl}/{$endpoint}";

        try {
            $response = $this->client->get($url, [
                'query' => $params
            ]);

            return [
                'status_code' => $response->getStatusCode(),
                'body' => (string) $response->getBody(),
            ];
        } catch (RequestException $e) {
            return [
                'status_code' => $e->getCode(),
                'body' => $e->getMessage(),
            ];
        }
    }
}
