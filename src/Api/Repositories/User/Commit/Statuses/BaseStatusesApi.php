<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Commit\Statuses;

use Bitbucket\Api\Repositories\User\Commit\BaseCommitApi;

class BaseStatusesApi extends BaseCommitApi
{
    /**
     * @var string
     */
    protected $statusesUri;

    public function __construct()
    {
        parent::__construct($this->node);
        $this->statusesUri = "{$this->commitUri}/statuses";
    }
}
