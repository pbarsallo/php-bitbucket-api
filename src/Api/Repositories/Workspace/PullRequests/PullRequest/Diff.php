<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

/**
 * Repository Pull Request Diff API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pullrequests/%7Bpull_request_id%7D/diff
 *
 * @author Patrick Barsallo
 */
class Diff extends BasePullRequestApi
{
    /**
     * Get raw diff for pull request
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []) : array
    {
        return $this->get("{$this->pullRequestUri}/diff", $params);
    }
}
