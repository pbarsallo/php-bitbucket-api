<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

class DiffStat extends BasePullRequestApi
{
    public function show(array $params = [])
    {
        return $this->get("{$this->pullRequestUri}/diffstat", $params);
    }
}
