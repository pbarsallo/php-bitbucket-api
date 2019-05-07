<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commits;

class Revision
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
    private $revision;

    public function __construct(string $username, string $repoSlug, string $revision)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
        $this->revision = $revision;
    }

    public function create(array $params)
    {

    }

    public function show(array $params = [])
    {

    }
}
