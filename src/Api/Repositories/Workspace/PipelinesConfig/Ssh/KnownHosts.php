<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Ssh;

class KnownHosts
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
    private $knownHostUuid;

    public function __construct(string $workspace, string $repoSlug, string $knownHostUuid)
    {
        $this->workspace = $workspace;
        $this->repoSlug = $repoSlug;
        $this->knownHostUuid = $knownHostUuid;
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
