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

/**
 * Repositories Workspace API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D
 *
 * @author Patrick Barsallo
 */
class Workspace extends BaseRepositoriesApi
{
    /**
     * Get workspace repository commit API
     *
     * @param string $repoSlug
     *
     * @return Commit
     */
    public function commit(string $repoSlug) : Commit
    {
        return new Commit($repoSlug);
    }

    /**
     * Get workspace repository deployments API
     *
     * @param string $repoSlug
     *
     * @return Deployments
     */
    public function deployments(string $repoSlug) : Deployments
    {
        return new Deployments($repoSlug);
    }

    /**
     * Get workspace repository environments API
     *
     * @param string $repoSlug
     *
     * @return Environments
     */
    public function environments(string $repoSlug) : Environments
    {
        return new Environments($repoSlug);
    }

    /**
     * Get workspace repository pipelines API
     *
     * @param string $repoSlug
     *
     * @return Pipelines
     */
    public function pipelines(string $repoSlug) : Pipelines
    {
        return new Pipelines($repoSlug);
    }

    /**
     * Get workspace repository pipelines config API
     *
     * @param string $repoSlug
     *
     * @return PipelinesConfig
     */
    public function pipelinesConfig(string $repoSlug) : PipelinesConfig
    {
        return new PipelinesConfig($repoSlug);
    }

    /**
     * Get workspace repository properties API
     *
     * @param string $repoSlug
     *
     * @return Properties
     */
    public function properties(string $repoSlug) : Properties
    {
        return new Properties($repoSlug);
    }

    /**
     * Get workspace repository pull requests API
     *
     * @param string $repoSlug
     *
     * @return PullRequests
     */
    public function pullRequests(string $repoSlug) : PullRequests
    {
        return new PullRequests($repoSlug);
    }
}
