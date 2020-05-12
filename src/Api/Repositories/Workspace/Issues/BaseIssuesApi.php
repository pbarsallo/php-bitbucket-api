<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Issues;

use Bitbucket\Api\Repositories\Workspace\BaseWorkspaceApi;

/**
 * Base Repository Issues Api
 *
 * @author Patrick Barsallo
 */
class BaseIssuesApi extends BaseWorkspaceApi
{
    /**
     * @var string
     */
    protected $issuesUri;

    /**
     * Create new base issues API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->repoSlug);
        $this->issuesUri = "{$this->workspaceRepositoryUri}/issues";
    }
}
