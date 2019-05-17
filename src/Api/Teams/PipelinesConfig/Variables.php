<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams\PipelinesConfig;

/**
 * Teams Pipelines Config Variables API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/teams/%7Busername%7D/pipelines_config/variables
 *
 * @author Patrick Barsallo
 */
class Variables extends BasePipelinesConfigApi
{
    /**
     * Create new pipelines config variable for team
     *
     * @param array $params
     *
     * @return array
     */
    public function create(array $params = []) : array
    {
        return $this->post("{$this->pipelinesConfigUri}/variables", $params);
    }

    /**
     * List all team pipelines config variables
     *
     * @param array $params
     *
     * @return array
     */
    public function list(array $params = []) : array
    {
        return $this->get("{$this->pipelinesConfigUri}/variables", $params);
    }

    /**
     * Update a pipelines config variable
     *
     * @param string $variableUUid
     * @param array  $params
     *
     * @return array
     */
    public function update(string $variableUuid, array $params = []) : array
    {
        return $this->put("{$this->pipelinesConfigUri}/variables/{$variableUuid}", $params);
    }

    /**
     * Get a specific pipelines config variable
     *
     * @param string $variableUUid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $variableUuid, array $params = []) : array
    {
        return $this->get("{$this->pipelinesConfigUri}/variables/{$variableUuid}", $params);
    }

    /**
     * Delete a pipelines config variable
     *
     * @param string $variableUUid
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $variableUuid, array $params = []) : array
    {
        return $this->delete("{$this->pipelinesConfigUri}/variables/{$variableUuid}", $params);
    }
}
