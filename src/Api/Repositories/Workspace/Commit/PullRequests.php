<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit;

/**
 * Workspace Repository Commit Pull Requests API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bcommit%7D/pullrequests
 *
 * @author Patrick Barsallo
 */
class PullRequests extends BaseCommitApi
{
    /**
     * List pull requests as part of which commit was reviewed
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->commitUri}/pullrequests", $params);
    }
}
