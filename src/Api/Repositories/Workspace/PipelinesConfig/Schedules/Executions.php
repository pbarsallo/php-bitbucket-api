<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules;

/**
 * Workspace Repostiory Pipelines Config Schedule Executions API Class
 * @see https://developer.atlassian.com/bitbucket/api/2/reference/resource/repositories/%7Bworkspace%7D/%7Brepo_slug%7D/pipelines_config/schedules/%7Bschedule_uuid%7D/executions
 *
 * @author Patrick Barsallo
 */
class Executions extends BaseSchedulesApi
{
    /**
     * Get executions for specific schedule
     *
     * @param array $params
     *
     * @return array
     */
    public function all(array $params = []) : array
    {
        return $this->get("{$this->scheduleUri}/executions", $params);
    }
}
