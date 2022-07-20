<?php

namespace Xucar\XucarSdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Api
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    /**
     * @param string $url
     * @param string[] $headers
     * @param string[] $body
     *
     * @return string
     * @throws GuzzleException
     */
    public function getRequest(string $url, array $headers, array $body): string
    {
        return $this->client->post(
            $url,
            [
                'headers' => $headers,
                'form_params' => $body,
            ]
        )->getBody();
    }

    /**
     * @param string $token
     *
     * @return string[]
     */
    public static function getHeaders(string $token): array
    {
        return [
            'x-api-key' => $token,
        ];
    }
}