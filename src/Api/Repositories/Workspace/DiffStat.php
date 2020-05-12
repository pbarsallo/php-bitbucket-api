<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * Repository Diff Stat API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/diffstat
 *
 * @author Patrick Barsallo
 */
class DiffStat extends BaseWorkspaceApi
{
    /**
     * Get diff stat for a specific commit
     *
     * @param string $spec
     * @param array  $params
     *
     * @return array
     */
    public function show(string $spec, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/diffstat/{$spec}", $params);
    }
}
