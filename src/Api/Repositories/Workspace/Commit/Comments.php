<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit;

/**
 * Workspace Repository Commit Comments API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/commit/%7Bnode%7D/comments
 *
 * @author Patrick Barsallo
 */
class Comments extends BaseCommitApi
{
    /**
     * Create a comments on a commit
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->commitUri}/comments", $params);
    }

    /**
     * List all comments on a commit
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->commitUri}/comments", $params);
    }

    /**
     * Get a specific commit comment
     *
     * @param int   $commentId
     * @param array $params
     *
     * @return array
     */
    public function show(int $commentId, array $params = []) : array
    {
        return $this->get("{$this->commitUri}/comments/{$commentId}", $params);
    }
}
