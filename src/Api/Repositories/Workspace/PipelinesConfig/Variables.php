<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig;

/**
 * Workspace Repository Pipelines Config Variables API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines_config/variables
 *
 * @author Patrick Barsallo
 */
class Variables extends BasePipelinesConfigApi
{
    /**
     * Update repository level variable
     *
     * @param string $variableUuid
     * @param array  $params
     *
     * @return array
     */
    public function update(string $variableUuid, array $params = []) : array
    {
        return $this->put("{$this->pipelinesConfigUri}/variables/{$variableUuid}", $params);
    }

    /**
     * Get repository level variable
     *
     * @param string $variableUuid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $variableUuid, array $params = []) : array
    {
        return $this->get("{$this->pipelinesConfigUri}/variables/{$variableUuid}", $params);
    }

    /**
     * Delete repository level variable
     *
     * @param string $variableUuid
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $variableUuid, array $params = []) : array
    {
        return $this->delete("{$this->pipelinesConfigUri}/variables/{$variableUuid}", $params);
    }
}
