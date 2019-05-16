<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Refs;

use Bitbucket\Api\Repositories\User\BaseUserApi;

class BaseRefsApi extends BaseUserApi
{
    /**
     * @var string
     */
    protected $refsUri;

    public function __construct()
    {
        parent::__construct($this->repoSlug);
        $this->refsUri = "{$this->userRepositoryUri}/refs";
    }
}
