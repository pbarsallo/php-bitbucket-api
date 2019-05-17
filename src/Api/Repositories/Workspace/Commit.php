<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\Commit\Properties;
use Bitbucket\Api\Repositories\Workspace\Commit\PullRequests;

/**
 * Workspace Repository Commit API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit
 *
 * @author Patrick Barsallo
 */
class Commit extends BaseWorkspaceApi
{
    /**
     * Get workspace repositories properties API
     *
     * @param string $commit
     *
     * @return Properties
     */
    public function properties(string $commit) : Properties
    {
        return new Properties($commit);
    }

    /**
     * Get workspace repositories pull requests API
     *
     * @param string $commit
     *
     * @return PullRequests
     */
    public function pullRequests(string $commit) : PullRequests
    {
        return new PullRequests($commit);
    }
}
