<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Addon\Linkers;
use Bitbucket\Api\Addon\Users;
use Bitbucket\Http\HttpClient;

/**
 * Add-On API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon
 *
 * @author Patrick Barsallo
 */
class Addon extends BaseApi
{
    /**
     * Base URI for add-on APIs
     */
    const URI = '/addon';

    /**
     * Create add-on API instance
     *
     * @param HttpClient $httpClient
     *
     * @return void
     */
    public function __construct(HttpClient $httpClient)
    {
        parent::__construct($httpClient);
    }

    /**
     * Update an add-on
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params) : array
    {
        return $this->put(self::URI, $params);
    }

    /**
     * Remove an add-on
     *
     * @param array $params
     *
     * @return array
     */
    public function remove(array $params = []) : array
    {
        return $this->delete(self::URI, $params);
    }

    /**
     * Get add-on linkers API
     *
     * @return Linkers
     */
    public function linkers() : Linkers
    {
        return new Linkers($this->httpClient);
    }

    /**
     * Get add-on users API
     *
     * @param string $targetUser
     *
     * @return Users
     */
    public function users(string $targetUser) : Users
    {
        return new Users($this->httpClient, $targetUser);
    }
}
