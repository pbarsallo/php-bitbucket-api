<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories;

use Bitbucket\Api\Repositories\Workspace\Commit;
use Bitbucket\Api\Repositories\Workspace\Deployments;
use Bitbucket\Api\Repositories\Workspace\Environments;
use Bitbucket\Api\Repositories\Workspace\Pipelines;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig;
use Bitbucket\Api\Repositories\Workspace\Properties;
use Bitbucket\Api\Repositories\Workspace\PullRequests;

class Workspace extends BaseRepositoriesApi
{
    public function commit(string $repoSlug)
    {
        return new Commit($this->workspace, $repoSlug);
    }

    public function deployments(string $repoSlug)
    {
        return new Deployments($this->workspace, $repoSlug);
    }

    public function environments(string $repoSlug)
    {
        return new Environments($this->workspace, $repoSlug);
    }

    public function pipelines(string $repoSlug)
    {
        return new Pipelines($this->workspace, $repoSlug);
    }

    public function pipelinesConfig(string $repoSlug)
    {
        return new PipelinesConfig($this->workspace, $repoSlug);
    }

    public function properties(string $repoSlug)
    {
        return new Properties($this->workspace, $repoSlug);
    }

    public function pullRequests(string $repoSlug)
    {
        return new PullRequests($this->workspace, $repoSlug);
    }
}
