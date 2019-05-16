<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Api\Repositories\User;
use Bitbucket\Api\Repositories\Workspace;

/**
 * Repositories API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories
 *
 * @author Patrick Barsallo
 */
class Repositories extends BaseApi
{
    /**
     * @var string
     */
    private $repositoriesUri = '/repositories';

    /**
     * List all public repositories
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get($this->repositoriesUri, $params);
    }

    /**
     * List repositories for specific user
     *
     * @param string $username
     * @param array  $params
     *
     * @return array
     */
    public function show(string $username, array $params = [])
    {
        return $this->get("{$this->repositoriesUri}/{$username}", $params);
    }

    /**
     * Get user repositories API
     *
     * @param string $username
     *
     * @return User
     */
    public function user(string $username) : User
    {
        return new User($username);
    }

    /**
     * Get workspace repositories API
     *
     * @param string $workspace
     *
     * @return Workspace
     */
    public function workspace(string $workspace) : Workspace
    {
        return new Workspace($this->httpClient, $workspace);
    }
}
