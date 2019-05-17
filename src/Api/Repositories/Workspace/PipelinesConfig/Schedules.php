<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig;

use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules\Executions;

/**
 * Workspace Repository Pipelines Config Schedules API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines_config/schedules
 *
 * @author Patrick Barsallo
 */
class Schedules extends BasePipelinesConfigApi
{
    /**
     * Update a schedule
     *
     * @param string $scheduleUuid
     * @param array  $params
     *
     * @return array
     */
    public function update(string $scheduleUuid, array $params = []) : array
    {
        return $this->put("{$this->pipelinesConfigUri}/schedules/{$scheduleUuid}", $params);
    }

    /**
     * Get a schedule
     *
     * @param string $scheduleUuid
     * @param array  $params
     *
     * @return array
     */
    public function show(string $scheduleUuid, array $params = []) : array
    {
        return $this->get("{$this->pipelinesConfigUri}/schedules/{$scheduleUuid}", $params);
    }

    /**
     * Remove a schedule
     *
     * @param string $scheduleUuid
     * @param array  $params
     *
     * @return array
     */
    public function remove(string $scheduleUuid, array $params = []) : array
    {
        return $this->delete("{$this->pipelinesConfigUri}/schedules/{$scheduleUuid}", $params);
    }

    /**
     * Get pipelines config schedule executions API
     *
     * @param string $scheduleUuid
     *
     * @return Executions
     */
    public function executions(string $scheduleUuid) : Executions
    {
        return new Executions($scheduleUuid);
    }
}
