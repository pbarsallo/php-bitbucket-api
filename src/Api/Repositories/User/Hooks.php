<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

/**
 * User Repository Hooks API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/hooks
 *
 * @author Patrick Barsallo
 */
class Hooks extends BaseUserApi
{
    /**
     * Create a new webhook
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->userRepositoryUri}/hooks", $params);
    }

    /**
     * List all webhooks
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/hooks", $params);
    }

    /**
     * Update a webhook
     *
     * @param string $uid
     * @param array  $params
     *
     * @return array
     */
    public function update(string $uid, array $params = []) : array
    {
        return $this->put("{$this->userRepositoryUri}/hooks/{$uid}", $params);
    }

    /**
     * Get a specific webhook
     *
     * @param string $uid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $uid, array $params = []) : array
    {
        return $this->get("{$this->userRepositoryUri}/hooks/{$uid}", $params);
    }

    /**
     * Remove a specific webhook
     *
     * @param string $uid
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $uid, array $params = []) : array
    {
        return $this->delete("{$this->userRepositoryUri}/hooks/{$uid}", $params);
    }
}
