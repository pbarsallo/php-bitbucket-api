<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace;

use Bitbucket\Api\Repositories\Workspace\Pipelines\Steps;

/**
 * Workspace Repository Pipelines API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines
 *
 * @author Patrick Barsallo
 */
class Pipelines extends BaseWorkspaceApi
{
    /**
     * Get a pipeline
     *
     * @param string $pipelineUuid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $pipelineUuid, array $params = []) : array
    {
        return $this->get("{$this->workspaceRepositoryUri}/pipeliunes/{$pipelineUuid}", $params);
    }

    /**
     * Stop a pipeline
     *
     * @param string $pipelineUuid
     * @param array  $params
     *
     * @return array
     */
    public function stop(string $pipelineUuid, array $params = []) : array
    {
        return $this->post("{$this->workspaceRepositoryUri}/pipeliunes/{$pipelineUuid}/stopPipeline", $params);
    }

    /**
     * Get workspace repository pipeline steps API
     *
     * @param string $pipelineUuid
     *
     * @return Steps
     */
    public function steps(string $pipelineUuid) : Steps
    {
        return new Steps($pipelineUuid);
    }
}
