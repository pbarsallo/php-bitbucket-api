<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Issues;

use Bitbucket\Api\Repositories\User\BaseUserApi;

/**
 * Base User Repository Issues Api
 *
 * @author Patrick Barsallo
 */
class BaseIssuesApi extends BaseUserApi
{
    /**
     * @var string
     */
    protected $issuesUri;

    /**
     * Create new base issues API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->repoSlug);
        $this->issuesUri = "{$this->userRepositoryUri}/issues";
    }
}
