<?php

declare(strict_types=1);

namespace Bitbucket;

use Bitbucket\Api\Addon;
use Bitbucket\Api\HookEvents;
use Bitbucket\Api\PullRequests;
use Bitbucket\Api\Repositories;
use Bitbucket\Api\Snippets;
use Bitbucket\Api\Teams;
use Bitbucket\Api\User;
use Bitbucket\Api\Users;
use Bitbucket\Http\HttpClient;

/**
 * PHP Client for Bitbucket 2.0 API
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/
 *
 * @author Patrick Barsallo
 */
class Client
{
    /**
     * @var HttpClient
     */
    private $httpClient;

    /**
     * Create a new Bitbucket client instance
     *
     * @param HttpClient $httpClient
     *
     * @return void
     */
    public function __construct(HttpClient $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * Add-On API
     * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/addon
     *
     * @return Addon
     */
    public function addon() : Addon
    {
        return new Addon($this->httpClient);
    }

    /**
     * Hook Events API
     * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/hook_events
     *
     * @return HookEvents
     */
    public function hookEvents() : HookEvents
    {
        return new HookEvents($this->httpClient);
    }

    /**
     * Pull Requests API
     * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/pullrequests
     *
     * @return PullRequests
     */
    public function pullRequests() : PullRequests
    {
        return new PullRequests($this->httpClient);
    }

    /**
     * Repositories API
     * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories
     *
     * @return Repositories
     */
    public function repositories() : Repositories
    {
        return new Repositories($this->httpClient);
    }

    /**
     * Snippets API
     * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/snippets
     *
     * @return Snippets
     */
    public function snippets() : Snippets
    {
        return new Snippets($this->httpClient);
    }

    /**
     * Teams API
     * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams
     *
     * @return Teams
     */
    public function teams() : Teams
    {
        return new Teams($this->httpClient);
    }

    /**
     * User API
     * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/user
     *
     * @return User
     */
    public function user() : User
    {
        return new User($this->httpClient);
    }

    /**
     * Users API
     * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/users
     *
     * @return Users
     */
    public function users() : Users
    {
        return new Users($this->httpClient);
    }
}
