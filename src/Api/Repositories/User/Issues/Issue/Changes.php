<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues\Issue;

class Changes extends BaseIssueApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->issueUri}/changes", $params);
    }

    public function all(array $params = [])
    {
        return $this->get("{$this->issueUri}/changes", $params);
    }

    public function show(string $changeId, array $params = [])
    {
        return $this->get("{$this->issueUri}/changes/{$changeId}", $params);
    }
}
