<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

/**
 * User Repository Pull Request Declination API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Busername%7D/%7Brepo_slug%7D/pullrequests/%7Bpull_request_id%7D/decline
 *
 * @author Patrick Barsallo
 */
class Declination extends BasePullRequestApi
{
    /**
     * Decline a pull request
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->pullRequestUri}/decline", $params);
    }
}
