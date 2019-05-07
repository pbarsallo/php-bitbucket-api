<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Pipelines;

use Bitbucket\Api\Repositories\Workspace\Pipelines\Steps\Log;

class Steps
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

    public function __construct(string $workspace, string $repoSlug, string $pipelineUuid)
    {
        $this->workspace = $workspace;
        $this->repoSlug = $repoSlug;
        $this->pipelineUuid = $pipelineUuid;
    }

    public function show(string $stepUuid, array $params = [])
    {

    }

    public function log(string $stepUuid)
    {
        return new Log($this->workspace, $this->repoSlug, $this->pipelineUuid, $stepUuid);
    }
}
