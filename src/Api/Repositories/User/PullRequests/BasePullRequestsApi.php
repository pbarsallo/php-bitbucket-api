<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests;

use Bitbucket\Api\Repositories\User\BaseUserApi;

/**
 * Base User Repository Pull Requests API Class
 *
 * @author Patrick Barsallo
 */
class BasePullRequestsApi extends BaseUserApi
{
    /**
     * @var string
     */
    protected $pullRequestsUri;

    /**
     * Create new base pull requests API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->repoSlug);
        $this->pullRequestsUri = "{$this->userRepositoryUri}/pullrequests";
    }
}
