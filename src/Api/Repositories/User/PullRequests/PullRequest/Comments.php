<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

/**
 * User Repository Pull Request Comments API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/pullrequests/%7Bpull_request_id%7D/comments
 *
 * @author Patrick Barsallo
 */
class Comments extends BasePullRequestApi
{
    /**
     * Post a new pull request comment
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->pullRequestUri}/comments", $params);
    }

    /**
     * List all pull request comments
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->pullRequestUri}/comments", $params);
    }

    /**
     * Edit a pull request comment
     *
     * @param string $commentId
     * @param array  $params
     *
     * @return array
     */
    public function update(string $commentId, array $params = []) : array
    {
        return $this->put("{$this->pullRequestUri}/comments/{$commentId}", $params);
    }

    /**
     * Get a specific pull request comment
     *
     * @param string $commentId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $commentId, array $params = []) : array
    {
        return $this->get("{$this->pullRequestUri}/comments/{$commentId}", $params);
    }

    /**
     * Delete a specific pull request comment
     *
     * @param string $commentId
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $commentId, array $params = []) : array
    {
        return $this->delete("{$this->pullRequestUri}/comments/{$commentId}", $params);
    }
}
