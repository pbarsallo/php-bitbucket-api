<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\Commit\Approval;
use Bitbucket\Api\Repositories\User\Commit\Comments;
use Bitbucket\Api\Repositories\User\Commit\Statuses;

class Commit
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

    public function show(string $node, array $params = [])
    {

    }

    public function approval(string $node)
    {
        return new Approval($this->username, $this->repoSlug, $node);
    }

    public function comments(string $node)
    {
        return new Comments($this->username, $this->repoSlug, $node);
    }

    public function statuses(string $node)
    {
        return new Statuses($this->username, $this->repoSlug, $node);
    }
}
