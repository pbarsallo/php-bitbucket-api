<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

/**
 * User Repository Pull Request Statuses API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/pullrequests/%7Bpull_request_id%7D/statuses
 *
 * @author Patrick Barsallo
 */
class Statuses extends BasePullRequestApi
{
    /**
     * Get statuses for pull request
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->pullRequestUri}/statuses", $params);
    }
}
