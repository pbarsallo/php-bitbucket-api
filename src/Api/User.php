<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\User\Emails;
use Bitbucket\Api\User\Permissions;

/**
 * User API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/user
 *
 * @author Patrick Barsallo
 */
class User extends BaseApi
{
    /**
     * @var string
     */
    private $uri = '/user';

    /**
     * Get current user
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []) : array
    {
        return $this->get($this->uri, $params);
    }

    /**
     * Get user emails API
     *
     * @return Emails
     */
    public function emails() : Emails
    {
        return new Emails;
    }

    /**
     * Get user permissions API
     *
     * @return Permissions
     */
    public function permissions() : Permissions
    {
        return new Permissions;
    }
}
