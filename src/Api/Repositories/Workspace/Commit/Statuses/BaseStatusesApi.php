<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\Workspace\Commit\Statuses;

use Bitbucket\Api\Repositories\Workspace\Commit\BaseCommitApi;

/**
 * Base User Repository Commit Statuses API Class
 *
 * @author Patrick Barsallo
 */
class BaseStatusesApi extends BaseCommitApi
{
    /**
     * @var string
     */
    protected $statusesUri;

    /**
     * Create new base statues API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->node);
        $this->statusesUri = "{$this->commitUri}/statuses";
    }
}
