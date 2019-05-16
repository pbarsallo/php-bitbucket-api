<?php

declare(strict_types=1);

namespace Bitbucket\Api;

/**
 * Pull Requests API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/pullrequests
 *
 * @author Patrick Barsallo
 */
class PullRequests extends BaseApi
{
    /**
     * @var string
     */
    private $pullRequestsUri = '/pullrequests';

    /**
     * List pull requests authored by a specific user
     *
     * @param string $targetUser
     * @param array  $params
     *
     * @return array
     */
    public function show(string $targetUser, array $params = []) : array
    {
        return $this->get("{$this->pullRequestsUri}/{$targetUser}", $params);
    }
}
