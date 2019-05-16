<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests;

class Activity extends BasePullRequestsApi
{
    public function all(array $params = [])
    {
        return $this->get("{$this->pullRequestsUri}/activity", $params);
    }

    public function show(string $pullRequestId, array $params = [])
    {
        return $this->get("{$this->pullRequestsUri}/activity/$pullRequestId", $params);
    }
}
