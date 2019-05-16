<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests;

use Bitbucket\Api\Repositories\User\BaseUserApi;

class BasePullRequestsApi extends BaseUserApi
{
    /**
     * @var string
     */
    protected $pullRequestsUri;

    public function __construct()
    {
        parent::__construct($this->repoSlug);
        $this->pullRequestsUri = "{$this->userRepositoryUri}/pullrequests";
    }
}
