<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit;

/**
 * Workspace Repositories Commit Approval API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bnode%7D/approve
 *
 * @author Patrick Barsallo
 */
class Approval extends BaseCommitApi
{
    /**
     * Approve a commit
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->commitUri}/approve", $params);
    }

    /**
     * Remove a commit approval
     *
     * @param array $params
     *
     * @return array
     */
    public function remove(array $params = []) : array
    {
        return $this->delete("{$this->commitUri}/approve", $params);
    }
}
