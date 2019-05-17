<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

/**
 * User Repository Pull Request Patch API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/pullrequests/%7Bpull_request_id%7D/patch
 *
 * @author Patrick Barsallo
 */
class Patch extends BasePullRequestApi
{
    /**
     * Get patch contents for pull request
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []) : array
    {
        return $this->get("{$this->pullRequestUri}/patch", $params);
    }
}
