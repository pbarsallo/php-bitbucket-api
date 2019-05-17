<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\PipelinesConfig\Ssh;

use Bitbucket\Api\Repositories\Workspace\PipelinesConfig\BasePipelinesConfigApi;

/**
 * Base Pipelines Config SSH API Class
 *
 * @author Patrick Barsallo
 */
class BaseSshApi extends BasePipelinesConfigApi
{
    /**
     * @var string
     */
    protected $sshUri;

    /**
     * Create new base SSH API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->sshUri = "{$this->pipelinesConfigUri}/ssh";
    }
}
