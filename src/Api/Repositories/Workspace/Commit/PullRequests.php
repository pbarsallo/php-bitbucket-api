<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit;

class PullRequests
{
    /**
     * @var string
     */
    private $workspace;

    /**
     * @var string
     */
    private $repoSlug;

    /**
     * @var string
     */
    private $commit;

    public function __construct(string $workspace, string $repoSlug, string $commit)
    {
        $this->workspace = $workspace;
        $this->repoSlug = $repoSlug;
        $this->commit = $commit;
    }

    public function all(array $params = [])
    {

    }
}
