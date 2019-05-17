<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Workspace Repository Environments API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/environments
 *
 * @author Patrick Barsallo
 */
class Environments extends BaseWorkspaceApi
{
    /**
     * Get an environment
     *
     * @param string $deploymentUuid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $environmentUuid, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/environments/{$environmentUuid}", $params);
    }

    /**
     * Remove an environment
     *
     * @param string $environmentUuid
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $environmentUuid, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/environments/{$environmentUuid}", $params);
    }

    /**
     * Update an environment
     *
     * @param string $environmentUuid
     * @param array  $params
     *
     * @return array
     */
    public function update(string $environmentUuid, array $params) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/environments/{$environmentUuid}/changes", $params);
    }
}
