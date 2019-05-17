<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Teams\Followers;
use Bitbucket\Api\Teams\Following;
use Bitbucket\Api\Teams\Hooks;
use Bitbucket\Api\Teams\Members;
use Bitbucket\Api\Teams\Permissions;
use Bitbucket\Api\Teams\PipelinesConfig;
use Bitbucket\Api\Teams\Projects;
use Bitbucket\Api\Teams\Repositories;
use Bitbucket\Api\Teams\Search;

/**
 * Teams API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams
 *
 * @author Patrick Barsallo
 */
class Teams extends BaseApi
{
    /**
     * @var string
     */
    private $uri = '/teams';

    /**
     * List all teams current user is associated with
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get($this->uri, $params);
    }

    /**
     * Get public information associated with a specific team
     *
     * @param string $username
     *
     * @return array
     */
    public function show(string $username, array $params = []) : array
    {
        return $this->get("{$this->uri}/{$username}", $params);
    }

    /**
     * Get teams followers API
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
     * Get teams following API
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
     * Get teams hooks API
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
     * Get teams members API
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
     * Get team permissions API
     *
     * @param string $username
     *
     * @return Permissions
     */
    public function permissions(string $username) : Permissions
    {
        return new Permissions($username);
    }

    /**
     * Get team pipeline config API
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
     * Get team projects API
     *
     * @param string $username
     *
     * @return Projects
     */
    public function projects(string $username) : Projects
    {
        return new Projects($username);
    }

    /**
     * Get team repositories API
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
     * Get teams search API
     *
     * @param string $username
     *
     * @return Search
     */
    public function search(string $username) : Search
    {
        return new Search($username);
    }
}
