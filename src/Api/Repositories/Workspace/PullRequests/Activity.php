<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests;

/**
 * User Repository Pull Requests Activity API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pullrequests/activity
 *
 * @author Patrick Barsallo
 */
class Activity extends BasePullRequestsApi
{
    /**
     * Get all pull request activity for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->pullRequestsUri}/activity", $params);
    }

    /**
     * Get activity for specific pull request
     *
     * @param string $pullRequestId
     * @param array  $params
     *
     * @return array
     */
    public function show(string $pullRequestId, array $params = []) : array
    {
        return $this->get("{$this->pullRequestsUri}/activity/$pullRequestId", $params);
    }
}
