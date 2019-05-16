<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

use Bitbucket\Api\Repositories\User\PullRequests\BasePullRequestsApi;

class BasePullRequestApi extends BasePullRequestsApi
{
    /**
     * @var string
     */
    protected $pullRequestUri;

    public function __construct(string $pullRequestId)
    {
        parent::__construct();
        $this->pullRequestUri = "{$this->pullRequestsUri}/$pullRequestId";
    }
}
