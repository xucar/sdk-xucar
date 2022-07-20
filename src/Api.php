<?php

namespace Xucar\XucarSdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Psr7\Request;

class Api
{
    private Client $client;

    public function __construct()
    {
        $this->client = new Client();
    }


    /**
     * @param string $method
     * @param string $url
     * @param string[] $headers
     * @param string[] $body
     *
     * @return string
     * @throws GuzzleException
     */
    public function getRequest(string $method, string $url, array $headers, array $body): string
    {
        $request = new Request(
            $method,
            $url, //TODO URL
            $headers,
            $body
        );

        return $this->client->send($request)->getBody();
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