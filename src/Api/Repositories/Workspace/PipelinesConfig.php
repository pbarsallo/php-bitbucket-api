<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\BuildNumber;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules\Ssh;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Variables;

class PipelinesConfig
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

    public function update(array $params)
    {

    }

    public function show(array $params = [])
    {

    }

    public function buildNumber()
    {
        return new BuildNumber($this->workspace, $this->repoSlug);
    }

    public function schedules()
    {
        return new Schedules($this->workspace, $this->repoSlug);
    }

    public function ssh()
    {
        return new Ssh($this->workspace, $this->repoSlug);
    }

    public function variables()
    {
        return new Variables($this->workspace, $this->repoSlug);
    }
}
