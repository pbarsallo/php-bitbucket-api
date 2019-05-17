<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Users\Followers;
use Bitbucket\Api\Users\Following;
use Bitbucket\Api\Users\Hooks;
use Bitbucket\Api\Users\Members;
use Bitbucket\Api\Users\PipelinesConfig;
use Bitbucket\Api\Users\Properties;
use Bitbucket\Api\Users\Repositories;
use Bitbucket\Api\Users\Search;
use Bitbucket\Api\Users\SshKeys;

/**
 * Users API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users
 *
 * @author Patrick Barsallo
 */
class Users extends BaseApi
{
    /**
     * @var string
     */
    private $uri = '/users';

    /**
     * Get public information associated with a specific user
     *
     * @param string $username
     * @param array  $params
     *
     * @return array
     */
    public function show(string $username, array $params = []) : array
    {
        return $this->get("{$this->uri}/{$username}", $params);
    }

    /**
     * Get users followers API
     *
     * @param string $username
     *
     * @return Followers
     */
    public function followers(string $username) : Followers
    {
        return new Followers($username);
    }

    /**
     * Get users following API
     *
     * @param string $username
     *
     * @return Following
     */
    public function following(string $username) : Following
    {
        return new Following($username);
    }

    /**
     * Get users hooks API
     *
     * @param string $username
     *
     * @return Hooks
     */
    public function hooks(string $username) : Hooks
    {
        return new Hooks($username);
    }

    /**
     * Get users members API
     *
     * @param string $username
     *
     * @return Members
     */
    public function members(string $username) : Members
    {
        return new Members($username);
    }

    /**
     * Get users pipelines config API
     *
     * @param string $username
     *
     * @return PipelinesConfig
     */
    public function pipelinesConfig(string $username) : PipelinesConfig
    {
        return new PipelinesConfig($username);
    }

    /**
     * Get users properties API
     *
     * @param string $username
     *
     * @return Properties
     */
    public function properties(string $username) : Properties
    {
        return new Properties($username);
    }

    /**
     * Get users repositories API
     *
     * @param string $username
     *
     * @return Repositories
     */
    public function repositories(string $username) : Repositories
    {
        return new Repositories($username);
    }

    /**
     * Get users search API
     *
     * @param string $username
     *
     * @return Search
     */
    public function search(string $username) : Search
    {
        return new Search($username);
    }

    /**
     * Get users SSH keys API
     *
     * @param string $username
     *
     * @return SshKeys
     */
    public function sshKeys(string $username) : SshKeys
    {
        return new SshKeys($username);
    }
}
