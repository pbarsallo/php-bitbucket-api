<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\PullRequests\Properties;

/**
 * Workspace Repository Pull Requests API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pullrequests
 *
 * @author Patrick Barsallo
 */
class PullRequests extends BaseWorkspaceApi
{
    /**
     * Get repository pull requests API
     *
     * @param string $pullRequestId
     *
     * @return Properties
     */
    public function properties(string $pullRequestId) : Properties
    {
        return new Properties($pullRequestId);
    }
}
