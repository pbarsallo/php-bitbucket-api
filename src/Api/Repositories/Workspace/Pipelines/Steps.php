<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Pipelines;

use Bitbucket\Api\Repositories\Workspace\Pipelines\Step\Log;

/**
 * Workspace Repository Pipeline Steps API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines/%7Bpipeline_uuid%7D/steps
 *
 * @author Patrick Barsallo
 */
class Steps extends BasePipelinesApi
{
    /**
     * Get a given step of a pipeline
     *
     * @param string $stepUuid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $stepUuid, array $params = []) : array
    {
        return $this->get("{$this->pipelineUri}/steps/{$stepUuid}", $params);
    }

    /**
     * Get pipeline step log API
     *
     * @param string $stepUuid
     *
     * @return Log
     */
    public function log(string $stepUuid) : Log
    {
        return new Log($stepUuid);
    }
}
