<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

/**
 * User Repository Issue Comments API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/issues/%7Bissue_id%7D/comments
 *
 * @author Patrick Barsallo
 */
class Comments extends BaseIssueApi
{
    /**
     * Create an issue comment
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->issueUri}/comments", $params);
    }

    /**
     * List all issue comments
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->issueUri}/comments", $params);
    }

    /**
     * Update an issue comment
     *
     * @param string $commentId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $commentId, array $params = []) : array
    {
        return $this->put("{$this->issueUri}/comments/{$commentId}", $params);
    }

    /**
     * Get a specific issue comment
     *
     * @param string $commentId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $commentId, array $params = []) : array
    {
        return $this->get("{$this->issueUri}/comments/{$commentId}", $params);
    }

    /**
     * Remove a specific issue comment
     *
     * @param string $commentId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $commentId, array $params = []) : array
    {
        return $this->delete("{$this->issueUri}/comments/{$commentId}", $params);
    }
}
