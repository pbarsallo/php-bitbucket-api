<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

class Export extends BaseIssuesApi
{
    public function create(array $params = [])
    {
        return $this->post("{$this->issuesUri}/export", $params);
    }

    public function show(string $repositoryName, string $taskId, array $params = [])
    {
        return $this->get("{$this->issuesUri}/export/{$repositoryName}-issues-{$taskId}.zip", $params);
    }
}
