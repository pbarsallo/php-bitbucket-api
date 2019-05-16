<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

class Statuses extends BasePullRequestApi
{
    public function all(array $params = [])
    {
        return $this->get("{$this->pullRequestUri}/statuses", $params);
    }
}
