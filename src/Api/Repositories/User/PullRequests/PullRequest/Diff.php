<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

class Diff extends BasePullRequestApi
{
    public function show(array $params = [])
    {
        return $this->get("{$this->pullRequestUri}/diff", $params);
    }
}
