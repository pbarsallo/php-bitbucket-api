<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests;

class Activity
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $repoSlug;

    public function __construct(string $username, string $repoSlug)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
    }

    public function all(array $params = [])
    {

    }

    public function show(string $pullRequestId, array $params = [])
    {

    }
}
