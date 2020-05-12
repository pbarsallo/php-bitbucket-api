<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

/**
 * User Repository Default Reviewers API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/default-reviewers
 *
 * @author Patrick Barsallo
 */
class DefaultReviewers extends BaseWorkspaceApi
{
    /**
     * List all default reviewers for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/default-reviewers", $params);
    }

    /**
     * Add specified user to default reviewers list
     *
     * @param string $username
     * @param array  $params
     *
     * @return array
     */
    public function update(string $username, array $params = []) : array
    {
        return $this->put("{$this->workspaceRepositoryUri}/default-reviewers/{$username}", $params);
    }

    /**
     * Get a specific default reviewer user
     *
     * @param string $username
     * @param array  $params
     *
     * @return array
     */
    public function show(string $username, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/default-reviewers/{$username}", $params);
    }

    /**
     * Remove a default reviewer
     *
     * @param string $username
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $username, array $params = []) : array
    {
        return $this->delete("{$this->workspaceRepositoryUri}/default-reviewers/{$username}", $params);
    }
}
