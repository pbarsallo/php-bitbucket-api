<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Workspace Repository Deployments API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/deployments
 *
 * @author Patrick Barsallo
 */
class Deployments extends BaseWorkspaceApi
{
    /**
     * Get a specific deployment
     *
     * @param string $deploymentUuid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $deploymentUuid, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/deployments/{$deploymentUuid}", $params);
    }
}
