<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Pipelines\Step;

use Bitbucket\Api\Repositories\Workspace\Pipelines\BasePipelinesApi;

/**
 * Base Workspace Repository Pipeline Steps API Class
 *
 * @author Patrick Barsallo
 */
class BaseStepApi extends BasePipelinesApi
{
    /**
     * @var string
     */
    protected $stepUri;

    /**
     * Create new base steps API instance
     *
     * @param string $stepUuid
     *
     * @return void
     */
    public function __construct(string $stepUuid)
    {
        parent::__construct($this->pipelineUuid);
        $this->stepUri = "{$this->pipelineUri}/steps/{$stepUuid}";
    }
}
