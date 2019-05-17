<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Schedules;

use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\BasePipelinesConfigApi;

/**
 * Base Pipelines Config Schedules API Class
 *
 * @author Patrick Barsallo
 */
class BaseSchedulesApi extends BasePipelinesConfigApi
{
    /**
     * @var string
     */
    protected $scheduleUri;

    /**
     * Create new base pipelines config schedules API instance
     *
     * @param string $scheduleUuid
     *
     * @return void
     */
    public function __construct(string $scheduleUuid)
    {
        parent::__construct();
        $this->scheduleUri = "{$this->pipelinesConfigUri}/schedules/{$scheduleUuid}";
    }
}
