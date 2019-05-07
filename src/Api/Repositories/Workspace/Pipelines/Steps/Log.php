<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Pipelines\Steps;

class Log
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
    private $pipelineUuid;

    /**
     * @var string
     */
    private $stepUuid;

    public function __construct(string $workspace, string $repoSlug, string $pipelineUuid, string $stepUuid)
    {
        $this->workspace = $workspace;
        $this->repoSlug = $repoSlug;
        $this->pipelineUuid = $pipelineUuid;
        $this->stepUuid = $stepUuid;
    }

    public function show(array $params = [])
    {

    }
}
