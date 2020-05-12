<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\DeploymentsConfig;

use Bitbucket\Api\Repositories\Workspace\BaseWorkspaceApi;

/**
 * Base Reposotory Deployments Config API Class
 *
 * @author Patrick Barsallo
 */
class BaseDeploymentsConfigApi extends BaseWorkspaceApi
{
    /**
     * @var string
     */
    protected $environmentVariablesUri;

    /**
     * Create new base deployments config API instance
     *
     * @param string $environmentUuid
     *
     * @return void
     */
    public function __construct(string $environmentUuid)
    {
        parent::__construct($this->repoSlug);
        $deploymentsConfigUri = "{$this->workspaceRepositoryUri}/deployments_config";
        $this->environmentVariablesUri = "{$deploymentsConfigUri}/environments/{$environmentUuid}/variables";
    }
}
