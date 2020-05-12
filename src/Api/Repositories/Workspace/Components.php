<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Repository Components API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/components
 *
 * @author Patrick Barsallo
 */
class Components extends BaseWorkspaceApi
{
    /**
     * List components defined in the issue tracker
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/components", $params);
    }

    /**
     * Get specified issue tracker component
     *
     * @param string $componentId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $componentId, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/components/{$componentId}", $params);
    }
}
