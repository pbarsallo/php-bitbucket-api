<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * User Repository Hooks API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/hooks
 *
 * @author Patrick Barsallo
 */
class Hooks extends BaseWorkspaceApi
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
        return $this->post("{$this->workspaceRepositoryUri}/hooks", $params);
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
        return $this->get("{$this->workspaceRepositoryUri}/hooks", $params);
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
        return $this->put("{$this->workspaceRepositoryUri}/hooks/{$uid}", $params);
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
        return $this->get("{$this->workspaceRepositoryUri}/hooks/{$uid}", $params);
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
        return $this->delete("{$this->workspaceRepositoryUri}/hooks/{$uid}", $params);
    }
}
