<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\BaseRepositoriesApi;
use Bitbucket\Http\HttpClient;

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
     * Create new base user API instance
     *
     * @param HttpClient $httpClient
     * @param string     $repoSlug
     *
     * @return void
     */
    public function __construct(string $repoSlug)
    {
        parent::__construct($this->username);
        $this->repoSlug = $repoSlug;
        $this->workspaceRepositoryUri = "{$this->workspaceRepositoriesUri}/{$repoSlug}";
    }
}
