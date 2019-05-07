<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules;

class Executions
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
    private $scheduleUuid;

    public function __construct(string $workspace, string $repoSlug, string $scheduleUuid)
    {
        $this->workspace = $workspace;
        $this->repoSlug = $repoSlug;
        $this->scheduleUuid = $scheduleUuid;
    }

    public function all(array $params = [])
    {

    }
}
