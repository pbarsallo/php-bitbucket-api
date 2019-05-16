<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

class Vote extends BaseIssueApi
{
    public function update(array $params = [])
    {
        return $this->put("{$this->issueUri}/vote", $params);
    }

    public function show(array $params = [])
    {
        return $this->get("{$this->issueUri}/vote", $params);
    }

    public function remove(array $params = [])
    {
        return $this->delete("{$this->issueUri}/vote", $params);
    }
}
