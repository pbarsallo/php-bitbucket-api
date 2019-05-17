<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig;

/**
 * Workspace Repository Pipelines Config Build Number API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines_config/build_number
 *
 * @author Patrick Barsallo
 */
class BuildNumber extends BasePipelinesConfigApi
{
    /**
     * Update next build number that should be assigned to a pipeline
     *
     * @param array $params
     *
     * @return array
     */
    public function update(array $params = []) : array
    {
        return $this->put("{$this->pipelinesConfigUri}/build_number", $params);
    }
}
