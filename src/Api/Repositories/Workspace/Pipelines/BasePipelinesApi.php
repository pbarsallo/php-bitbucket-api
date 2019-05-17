<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Pipelines;

use Bitbucket\Api\Repositories\Workspace\BaseWorkspaceApi;

/**
 * Base Workspace Repository Pipelines API Class
 *
 * @author Patrick Barsallo
 */
class BasePipelinesApi extends BaseWorkspaceApi
{
    /**
     * @var string
     */
    protected $pipelineUuid;

    /**
     * @var string
     */
    protected $pipelineUri;

    /**
     * Create new base pipelines API instance
     *
     * @param string $pipelineUuid
     *
     * @return void
     */
    public function __construct(string $pipelineUuid)
    {
        parent::__construct($this->repoSlug);
        $this->pipelineUuid = $pipelineUuid;
        $this->pipelineUri = "{$this->workspaceRepositoryUri}/pipelines/{$pipelineUuid}";
    }
}
