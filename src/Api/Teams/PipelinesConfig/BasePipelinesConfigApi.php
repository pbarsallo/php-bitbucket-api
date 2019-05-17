<?php

declare(strict_types=1);

namespace Bitbucket\Api\Teams\PipelinesConfig;

use Bitbucket\Api\Teams\BaseTeamsApi;

/**
 * Base Team Pipelines Config API Class
 *
 * @author Patrick Barsallo
 */
class BasePipelinesConfigApi extends BaseTeamsApi
{
    /**
     * @var string
     */
    protected $pipelinesConfigUri;

    /**
     * Create new base pipelines config API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->username);
        $this->pipelinesConfigUri = "{$this->teamUri}/pipelines_config";
    }
}
