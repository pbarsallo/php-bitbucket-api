<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\Commits\Revision;

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

    public function __construct(string $username, string $repoSlug)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
    }

    public function create(array $params)
    {

    }

    public function all(array $params = [])
    {

    }

    public function revision(string $revision)
    {
        return new Revision($this->username, $this->repoSlug, $revision);
    }
}
