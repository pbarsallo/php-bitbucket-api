<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\Pipelines\Steps;

class Pipelines
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

    public function show(string $pipelineUuid, array $params = [])
    {

    }

    public function steps(string $pipelineUuid)
    {
        return new Steps($this->workspace, $this->repoSlug, $pipelineUuid);
    }

    public function stop(string $pipelineUuid, array $params = [])
    {

    }
}
