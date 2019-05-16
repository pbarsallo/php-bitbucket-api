<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * User Repository Deploy Keys API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/deploy-keys
 *
 * @author Patrick Barsallo
 */
class DeployKeys extends BaseUserApi
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
        return $this->post("{$this->userRepositoryUri}/deploy-keys", $params);
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
        return $this->get("{$this->userRepositoryUri}/deploy-keys", $params);
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
        return $this->put("{$this->userRepositoryUri}/deploy-keys/{$keyId}", $params);
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
        return $this->get("{$this->userRepositoryUri}/deploy-keys/{$keyId}", $params);
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
        return $this->delete("{$this->userRepositoryUri}/deploy-keys/{$keyId}", $params);
    }
}
