<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Repository versions API
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/versions
 *
 * @author Patrick Barsallo
 */
class Versions extends BaseWorkspaceApi
{
    /**
     * List all versions for a specific repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = [])
    {
        return $this->get("{$this->workspaceRepositoryUri}/versions", $params);
    }

    /**
     * Get specific version details
     *
     * @param string $versionId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $versionId, array $params = [])
    {
        return $this->get("{$this->workspaceRepositoryUri}/versions/{$versionId}", $params);
    }
}
