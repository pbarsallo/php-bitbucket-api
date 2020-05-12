<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

use Bitbucket\Api\Repositories\User\PullRequests\BasePullRequestsApi;

/**
 * Base User Repository Pull Request API Class
 *
 * @author Patrick Barsallo
 */
class BasePullRequestApi extends BasePullRequestsApi
{
    /**
     * @var string
     */
    protected $pullRequestUri;

    /**
     * Create a new base pull request API instance
     *
     * @param string $pullRequestId
     *
     * @return void
     */
    public function __construct(string $pullRequestId)
    {
        parent::__construct();
        $this->pullRequestUri = "{$this->pullRequestsUri}/$pullRequestId";
    }
}
