<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules;

use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Ssh\KeyPair;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Ssh\KnownHosts;

class Ssh
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

    public function keyPair()
    {
        return new KeyPair($this->workspace, $this->repoSlug);
    }

    public function knownHosts(string $knownHostUuid)
    {
        return new KnownHosts($this->workspace, $this->repoSlug, $knownHostUuid);
    }
}
