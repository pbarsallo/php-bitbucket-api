<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\BranchingModel;

use Bitbucket\Api\Repositories\User\BaseUserApi;

/**
 * Base Branching Model API Class
 *
 * @author Patrick Barsallo
 */
class BaseBranchingModelApi extends BaseUserApi
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
        $this->branchingModelUri = "{$this->userRepositoryUri}/branching-model";
    }
}
