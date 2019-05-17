<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PullRequests;

use Bitbucket\Api\Repositories\Workspace\BaseWorkspaceApi;

/**
 * Base Workspace Repository Pull Requests API Class
 *
 * @author Patrick Barsallo
 */
class BasePullRequestsApi extends BaseWorkspaceApi
{
    /**
     * @var string
     */
    protected $pullRequestUri;

    /**
     * Create new base pull requests API instance
     *
     * @param string $pullRequestId
     *
     * @return void
     */
    public function __construct(string $pullRequestId)
    {
        parent::__construct($this->repoSlug);
        $this->pullRequestUri = "{$this->workspaceRepositoryUri}/{$pullRequestId}";
    }
}
