<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\PullRequests\PullRequest;

class Declination extends BasePullRequestApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->pullRequestUri}/decline", $params);
    }
}
