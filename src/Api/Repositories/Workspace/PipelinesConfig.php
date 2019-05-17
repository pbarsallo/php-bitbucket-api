<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\BuildNumber;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules\Ssh;
use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Variables;

/**
 * Workspace Repository Pipelines Config API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines_config
 *
 * @author Patrick Barsallo
 */
class PipelinesConfig extends BaseWorkspaceApi
{
    /**
     * Update pipelines config for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params = []) : array
    {
        return $this->put("{$this->workspaceRepositoryUri}/pipelines_config", $params);
    }

    /**
     * Get pipelines config for repository
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/pipelines_config", $params);
    }

    /**
     * Get pipelines config build number API
     *
     * @return BuildNumber
     */
    public function buildNumber() : BuildNumber
    {
        return new BuildNumber;
    }

    /**
     * Get pipelines config schedules API
     *
     * @return Schedules
     */
    public function schedules() : Schedules
    {
        return new Schedules;
    }

    /**
     * Get pipelines config SSH API
     *
     * @return Ssh
     */
    public function ssh() : Ssh
    {
        return new Ssh;
    }

    /**
     * Get pipelines config variables API
     *
     * @return Variables
     */
    public function variables() : Variables
    {
        return new Variables;
    }
}
