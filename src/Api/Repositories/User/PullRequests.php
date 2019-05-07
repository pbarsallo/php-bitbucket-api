<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\PullRequests\Activity;
use Bitbucket\Api\Repositories\User\PullRequests\Approval;
use Bitbucket\Api\Repositories\User\PullRequests\Comments;
use Bitbucket\Api\Repositories\User\PullRequests\Commits;
use Bitbucket\Api\Repositories\User\PullRequests\Diff;
use Bitbucket\Api\Repositories\User\PullRequests\DiffStat;
use Bitbucket\Api\Repositories\User\PullRequests\Patch;
use Bitbucket\Api\Repositories\User\PullRequests\Statuses;

class PullRequests
{
    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $repoSlug;

    public function __construct(string $username, string $repoSlug)
    {
        $this->username = $username;
        $this->repoSlug = $repoSlug;
    }

    public function create(array $params)
    {

    }

    public function all(array $params = [])
    {

    }

    public function decline(string $pullRequestId, array $params = [])
    {

    }

    public function merge(string $pullRequestId, array $params = [])
    {

    }

    public function activity()
    {
        return new Activity($this->username, $this->repoSlug);
    }

    public function approval(string $pullRequestId)
    {
        return new Approval($this->username, $this->repoSlug, $pullRequestId);
    }

    public function comments(string $pullRequestId)
    {
        return new Comments($this->username, $this->repoSlug, $pullRequestId);
    }

    public function commits(string $pullRequestId)
    {
        return new Commits($this->username, $this->repoSlug, $pullRequestId);
    }

    public function diff(string $pullRequestId)
    {
        return new Diff($this->username, $this->repoSlug, $pullRequestId);
    }

    public function diffStat(string $pullRequestId)
    {
        return new DiffStat($this->username, $this->repoSlug, $pullRequestId);
    }

    public function patch(string $pullRequestId)
    {
        return new Patch($this->username, $this->repoSlug, $pullRequestId);
    }

    public function statuses(string $pullRequestId)
    {
        return new Statuses($this->username, $this->repoSlug, $pullRequestId);
    }
}
