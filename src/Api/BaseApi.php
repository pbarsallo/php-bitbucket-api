<?php

declare(strict_type=1);

namespace Bitbucket\Api;

use Bitbucket\Http\HttpClient;

/**
 * Base API Functionality
 *
 * @author Patrick Barsallo
 */
class BaseApi
{
    /**
     * @var HttpClient
     */
    protected $httpClient;

    /**
     * Create a new abstract API instance
     *
     * @param HttpClient $httpClient
     *
     * @return void
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Fire a GET request
     *
     * @param string $uri
     * @param array  $params
     *
     * @return array
     */
    protected function get(string $uri, array $params = []) : array
    {
        return $this->httpClient
            ->method('GET')
            ->uri($uri)
            ->params($params)
            ->sendRequest();
    }

    /**
     * Fire a POST request
     *
     * @param string $uri
     * @param array  $params
     *
     * @return array
     */
    protected function post(string $uri, array $params) : array
    {
        return $this->httpClient
            ->method('POST')
            ->uri($uri)
            ->params($params)
            ->sendRequest();
    }

    /**
     * Fire a PUT request
     *
     * @param string $uri
     * @param array  $params
     *
     * @return array
     */
    protected function put(string $uri, array $params) : array
    {
        return $this->httpClient
            ->method('PUT')
            ->uri($uri)
            ->params($params)
            ->sendRequest();
    }

    /**
     * Fire a DELETE request
     *
     * @param string $uri
     * @param array  $params
     *
     * @return array
     */
    protected function delete(string $uri, array $params = []) : array
    {
        return $this->httpClient
            ->method('DELETE')
            ->uri($uri)
            ->params($params)
            ->sendRequest();
    }
}
