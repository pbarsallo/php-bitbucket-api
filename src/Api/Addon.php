<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Addon\Linkers;
use Bitbucket\Api\Addon\Users;

/**
 * Add-On API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon
 *
 * @author Patrick Barsallo
 */
class Addon extends BaseApi
{
    /**
     * @var string
     */
    private $uri = '/addon';

    /**
     * Update an add-on
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params = []) : array
    {
        return $this->put("{$this->uri}", $params);
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
        return $this->delete("{$this->uri}", $params);
    }

    /**
     * Get add-on linkers API
     *
     * @return Linkers
     */
    public function linkers() : Linkers
    {
        return new Linkers;
    }

    /**
     * Get add-on users API
     *
     * @return Users
     */
    public function users() : Users
    {
        return new Users;
    }
}
