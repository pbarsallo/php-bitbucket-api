<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

class Approval extends BasePullRequestApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->pullRequestUri}/approve", $params);
    }

    public function remove(array $params = [])
    {
        return $this->delete("{$this->pullRequestUri}/approve", $params);
    }
}
