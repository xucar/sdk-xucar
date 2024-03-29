<?php

namespace Xucar\XucarSdk;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class Api
{
    private const BASE_URI = '/api/v1';

    private Client $client;
    private string $host;
    private string $token;

    public function __construct(string $host, string $token)
    {
        $this->host = $host;
        $this->token = $token;

        $this->client = new Client();
    }

    /**
     * @param string $endpoint
     * @param string $body
     * @param array<string, string> $requestHeaders
     *
     * @return string
     * @throws GuzzleException
     */
    public function getRequestPost(string $endpoint, string $body, array $requestHeaders = []): string
    {
        $headers = [
            'Authorization' => 'Basic '.$this->token,
        ];

        return $this->client->post(
            $this->host.self::BASE_URI.$endpoint,
            [
                'headers' => $headers + $requestHeaders,
                'body' => $body,
            ]
        )->getBody();
    }

    /**
     * @param string $endpoint
     * @param string $body
     * @param array $requestHeaders
     *
     * @return string
     * @throws GuzzleException
     */
    public function getRequestGet(string $endpoint, string $body, array $requestHeaders = []): string
    {
        $headers = [
            'Authorization' => 'Basic '.$this->token,
        ];

        return $this->client->get(
            $this->host.self::BASE_URI.$endpoint,
            [
                'headers' => $headers + $requestHeaders,
                'body' => $body,
            ]
        )->getBody();
    }

    /**
     * @param string $endpoint
     * @param string $body
     * @param array<string, string> $requestHeaders
     *
     * @return string
     * @throws GuzzleException
     */
    public function getRequestPut(string $endpoint, string $body, array $requestHeaders = []): string
    {
        $headers = [
            'Authorization' => 'Basic '.$this->token,
        ];

        return $this->client->put(
            $this->host.self::BASE_URI.$endpoint,
            [
                'headers' => $headers + $requestHeaders,
                'body' => $body,
            ]
        )->getBody();
    }
}