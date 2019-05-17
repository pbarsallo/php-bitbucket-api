<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig;

use Bitbucket\Api\Repositories\Workspace\BaseWorkspaceApi;

/**
 * Base Workspace Repository Pipelines Config API Class
 *
 * @author Patrick Barsallo
 */
class BasePipelinesConfigApi extends BaseWorkspaceApi
{
    /**
     * @var string
     */
    protected $pipelinesConfigUri;

    /**
     * Create new base pipelines config API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->repoSlug);
        $this->pipelinesConfigUri = "{$this->workspaceRepositoryUri}/pipelines_config";
    }
}
