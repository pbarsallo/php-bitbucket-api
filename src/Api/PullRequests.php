<?php

declare(strict_types=1);

namespace Bitbucket\Api;

use Bitbucket\Http\HttpClient;

/**
 * Pull Requests API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/pullrequests
 *
 * @author Patrick Barsallo
 */
class PullRequests extends BaseApi
{
    /**
     * Base URI for pull requests API
     */
    const URI = '/pullrequests';

    /**
     * Create pull requests API instance
     *
     * @param HttpClient $httpClient
     *
     * @return void
     */
    public function __construct(HttpClient $httpClient)
    {
        parent::__construct($httpClient);
    }

    /**
     * List pull requests authored by a specific user
     *
     * @param string $targetUser
     * @param array  $params
     *
     * @return array
     */
    public function show(string $targetUser, array $params = [])
    {
        return $this->get(self::URI . "/{$targetUser}", $params);
    }
}
