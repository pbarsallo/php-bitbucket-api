<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\Commit\Properties;
use Bitbucket\Api\Repositories\Workspace\Commit\PullRequests;

class Commit
{
    /**
     * @var string
     */
    private $workspace;

    /**
     * @var string
     */
    private $repoSlug;

    public function __construct(string $workspace, string $repoSlug)
    {
        $this->workspace = $workspace;
        $this->repoSlug = $repoSlug;
    }

    public function properties(string $commit)
    {
        return new Properties($this->workspace, $this->repoSlug, $commit);
    }

    public function pullRequests(string $commit)
    {
        return new PullRequests($this->workspace, $this->repoSlug, $commit);
    }
}
