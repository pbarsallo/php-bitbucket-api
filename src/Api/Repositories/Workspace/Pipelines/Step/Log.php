<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Pipelines\Step;

/**
 * Workspace Repostiory Pipeline Step Log API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines/%7Bpipeline_uuid%7D/steps/%7Bstep_uuid%7D/log
 *
 * @author Patrick Barsallo
 */
class Log extends BaseStepApi
{
    /**
     * Get log file for given step of a pipeline
     *
     * @param array $params
     *
     * @return array
     */
    public function show(array $params = []) : array
    {
        return $this->get("{$this->stepUri}", $params);
    }
}
