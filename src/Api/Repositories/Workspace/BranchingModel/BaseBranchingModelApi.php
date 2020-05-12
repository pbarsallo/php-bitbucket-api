<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\BranchingModel;

use Bitbucket\Api\Repositories\Workspace\BaseWorkspaceApi;

/**
 * Base Branching Model API Class
 *
 * @author Patrick Barsallo
 */
class BaseBranchingModelApi extends BaseWorkspaceApi
{
    /**
     * @var string
     */
    protected $branchingModelUri;

    /**
     * Create a new branching model API class instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->repoSlug);
        $this->branchingModelUri = "{$this->workspaceRepositoryUri}/branching-model";
    }
}
