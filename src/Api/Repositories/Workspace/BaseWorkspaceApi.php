<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\BaseRepositoriesApi;

/**
 * Base Workspace Repositories API Class
 *
 * @author Patrick Barsallo
 */
class BaseWorkspaceApi extends BaseRepositoriesApi
{
    /**
     * @var string
     */
    protected $repoSlug;

    /**
     * @var string
     */
    protected $workspaceRepositoryUri;

    /**
     * Create new base workspace API instance
     *
     * @param string $repoSlug
     *
     * @return void
     */
    public function __construct(string $repoSlug)
    {
        parent::__construct($this->username);
        $this->repoSlug = $repoSlug;
        $this->workspaceRepositoryUri = "{$this->userRepositoriesUri}/{$repoSlug}";
    }
}
