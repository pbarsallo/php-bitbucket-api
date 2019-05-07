<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

class Watch
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
    private $issueId;

    public function __construct(string $username, string $repoSlug, string $issueId)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
        $this->issueId = $issueId;
    }

    public function update(array $params)
    {

    }

    public function show(array $params = [])
    {

    }

    public function remove(array $params = [])
    {

    }
}
