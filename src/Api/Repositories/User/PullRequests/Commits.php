<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests;

class Commits
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $repoSlug;

    /**
     * @var string
     */
    private $pullRequestId;

    public function __construct(string $username, string $repoSlug, $pullRequestId)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
        $this->pullRequestId = $pullRequestId;
    }

    public function all(array $params = [])
    {

    }
}
