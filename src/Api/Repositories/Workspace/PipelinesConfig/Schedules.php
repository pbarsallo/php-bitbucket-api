<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig;

use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules\Executions;

class Schedules
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

    public function update(string $scheduleUuid, array $params)
    {

    }

    public function show(string $scheduleUuid, array $params = [])
    {

    }

    public function remove(string $scheduleUuid, array $params = [])
    {

    }

    public function executions(string $scheduleUuid)
    {
        return new Executions($this->workspace, $this->repoSlug, $scheduleUuid);
    }
}
