<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests;

class Comments
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

    public function create(array $params)
    {

    }

    public function all(array $params = [])
    {

    }

    public function update(string $commentId, array $params)
    {

    }

    public function show(string $commentId, array $params = [])
    {

    }

    public function remove(string $commentId, array $params = [])
    {

    }
}
