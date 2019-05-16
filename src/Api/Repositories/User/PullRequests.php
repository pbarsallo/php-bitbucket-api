<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User;

use Bitbucket\Api\Repositories\User\PullRequests\Activity;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Approval;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Comments;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Commits;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Declination;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Diff;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\DiffStat;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Merge;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Patch;
use Bitbucket\Api\Repositories\User\PullRequests\PullRequest\Statuses;

class PullRequests extends BaseUserApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/pullrequests", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->userRepositoryUri}/pullrequests", $params);
    }

    public function update(string $pullRequestId, array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/pullrequests/{$pullRequestId}", $params);
    }

    public function show(string $pullRequestId, array $params = [])
    {
        return $this->post("{$this->userRepositoryUri}/pullrequests/{$pullRequestId}", $params);
    }

    public function getActivity()
    {
        return new Activity;
    }

    public function approval(string $pullRequestId)
    {
        return new Approval($pullRequestId);
    }

    public function comments(string $pullRequestId)
    {
        return new Comments($pullRequestId);
    }

    public function commits(string $pullRequestId)
    {
        return new Commits($pullRequestId);
    }

    public function declination(string $pullRequestId)
    {
        return new Declination($pullRequestId);
    }

    public function diff(string $pullRequestId)
    {
        return new Diff($pullRequestId);
    }

    public function diffStat(string $pullRequestId)
    {
        return new DiffStat($pullRequestId);
    }

    public function merge(string $pullRequestId)
    {
        return new Merge($pullRequestId);
    }

    public function patch(string $pullRequestId)
    {
        return new Patch($pullRequestId);
    }

    public function statuses(string $pullRequestId)
    {
        return new Statuses($pullRequestId);
    }
}
