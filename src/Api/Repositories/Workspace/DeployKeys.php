<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * User Repository Deploy Keys API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/deploy-keys
 *
 * @author Patrick Barsallo
 */
class DeployKeys extends BaseWorkspaceApi
{
    /**
     * Create a new deploy key
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/deploy-keys", $params);
    }

    /**
     * List all deploy keys for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/deploy-keys", $params);
    }

    /**
     * Update a deploy key
     *
     * @param string $keyId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $keyId, array $params = []) : array
    {
        return $this->put("{$this->workspaceRepositoryUri}/deploy-keys/{$keyId}", $params);
    }

    /**
     * Get a specific deploy key
     *
     * @param string $keyId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $keyId, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/deploy-keys/{$keyId}", $params);
    }

    /**
     * Remove a deploy key
     *
     * @param string $keyId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $keyId, array $params = []) : array
    {
        return $this->delete("{$this->workspaceRepositoryUri}/deploy-keys/{$keyId}", $params);
    }
}
