<?php

declare(strict_types=1);

namespace Bitbucket\Http;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

/**
 * Base Abstract HTTP Client
 *
 * @author Patrick Barsallo
 */
abstract class HttpClient
{
    /**
     * Bitbucket 2.0 API base URL
     */
    const BASE_URL = 'https://api.bitbucket.org/2.0';

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $uri;

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @var Client
     */
    private $client;

    /**
     * Create a new HTTP client instance
     *
     * @return void
     */
    public function __construct()
    {
        $this->client = new Client;
    }

    /**
     * Generate the appropriate authorization header string
     *
     * @return string
     */
    abstract function authorizationHeader() : string;

    /**
     * Set request verb
     *
     * @param string $method
     *
     * @return $this
     */
    public function method(string $method) : HttpClient
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Set request URI
     *
     * @param string $method
     *
     * @return $this
     */
    public function uri(string $uri) : HttpClient
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Set request verb
     *
     * @param array $params
     *
     * @return $this
     */
    public function params(array $params) : HttpClient
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Send an HTTP request and return response body
     *
     * @param string $method
     * @param string $uri
     * @param array  $params
     * @param array  $headers
     *
     * @return array
     */
    public function sendRequest() : array
    {
        try {
            $response = $this->client->request(
                $this->method,
                self::BASE_URL . $this->uri,
                [
                    'headers' => [
                        'Authorization' => $this->authorizationHeader()
                    ],
                    'query' => $this->params
                ]
            );
        } catch (GuzzleException $e) {
            // TODO: Handle client exception
        }

        $responseData = $response->getBody()->getContents();

        return json_decode($responseData, true);
    }
}
