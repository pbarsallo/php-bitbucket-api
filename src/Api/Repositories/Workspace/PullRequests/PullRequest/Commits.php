<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

/**
 * Repository Pull Request Commits API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pullrequests/%7Bpull_request_id%7D/commits
 *
 * @author Patrick Barsallo
 */
class Commits extends BasePullRequestApi
{
    /**
     * List commits for a pull request
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->pullRequestUri}/commits", $params);
    }
}
