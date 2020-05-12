<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit;

/**
 * Repository Commit Pull Requests API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bcommit%7D/pullrequests
 *
 * @author Patrick Barsallo
 */
class PullRequests extends BaseCommitApi
{
    /**
     * Retrieve list of pull requests in which a commit was reviewed
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
