<?php

declare(strict_types=1);

namespace Bitbucket\Api;

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
     * @param string $account
     * @param array  $params
     *
     * @return array
     */
    public function show(string $account, array $params = []) : array
    {
        return $this->get("{$this->repositoriesUri}/{$account}", $params);
    }

    /**
     * Get user repositories API
     *
     * @param string $account
     *
     * @return Workspace
     */
    public function user(string $account) : Workspace
    {
        return new Workspace($account);
    }
}
