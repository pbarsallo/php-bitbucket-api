<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit;

use Bitbucket\Api\Repositories\Workspace\BaseWorkspaceApi;

/**
 * Base Workspace Repository Commit API Class
 *
 * @author Patrick Barsallo
 */
class BaseCommitApi extends BaseWorkspaceApi
{
    /**
     * @var string
     */
    protected $commitUri;

    /**
     * Create new base commit API instance
     *
     * @param string $commit
     *
     * @return void
     */
    public function __construct(string $commit)
    {
        parent::__construct($this->repoSlug);
        $this->commitUri = "{$this->workspaceRepositoryUri}/commit/{$commit}";
    }
}
