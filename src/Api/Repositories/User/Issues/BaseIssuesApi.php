<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

use Bitbucket\Api\Repositories\User\BaseUserApi;

class BaseIssuesApi extends BaseUserApi
{
    /**
     * @var string
     */
    protected $issuesUri;

    public function __construct()
    {
        parent::__construct($this->repoSlug);
        $this->issuesUri = "{$this->userRepositoryUri}/issues";
    }
}
