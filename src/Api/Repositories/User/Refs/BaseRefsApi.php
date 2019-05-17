<?php

declare(strict_types=1);

namespace Bitbucket\Api\Repositories\User\Refs;

use Bitbucket\Api\Repositories\User\BaseUserApi;

/**
 * Base User Repository Refs API Class
 *
 * @author Patrick Barsallo
 */
class BaseRefsApi extends BaseUserApi
{
    /**
     * @var string
     */
    protected $refsUri;

    /**
     * Create new base refs API instance
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct($this->repoSlug);
        $this->refsUri = "{$this->userRepositoryUri}/refs";
    }
}
