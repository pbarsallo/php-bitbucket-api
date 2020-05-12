<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Repository Diff API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/diff
 *
 * @author Patrick Barsallo
 */
class Diff extends BaseWorkspaceApi
{
    /**
     * Get a raw, git-style diff for a specific commit
     *
     * @param string $spec
     * @param array  $params
     *
     * @return array
     */
    public function show(string $spec, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/diff/{$spec}", $params);
    }
}
